<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Constants;
use App\Customer;
use App\Employee;
use App\Helpers\CustomFilter;
use App\Inspect;
use App\Issue;
use App\Item;
use App\Location;
use App\Receivable;
use App\ReceivableOpening;
use App\Sale;
use App\StockIn;
use App\Store;
use App\Supplier;
use App\Transfer;
use App\Type;
use Carbon\Carbon;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class ReportController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
     */
    public function stockInReport(Request $request)
    {
        if ($request->daterange) {
            $request->session()->flash('alert-success', 'Stock In Report for (' . $request->daterange . ') is generated!!');
        }

        [$from, $to] = $this->getDateRange($request->daterange);

        $stockIns = StockIn::query()
            ->customDateFilter('created_at', $from, $to)->get();

        return view('admin.report.stockInReport', [
            'stockIns' => $stockIns,
        ]);
    }

    /**
     * @param StockIn $stockIn
     * @return Factory|View
     */
    public function stockInReportDetail(StockIn $stockIn)
    {

        $supplier = Supplier::find($stockIn->supplier_id);
        $location = Location::find(($stockIn->location_id));

        $items = $stockIn->items;

        return view('admin.report.stockInReportDetail', [
            'stockIn' => $stockIn,
            'supplier' => $supplier,
            'location' => $location,
            'items' => $items
        ]);
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function saleReport(Request $request)
    {
        if ($request->daterange) {
            $request->session()->flash('alert-success', 'Sale Report (' . $request->daterange . ' / ' . $request->saleType . ') is generated!!');
        }

        [$from, $to] = $this->getDateRange($request->daterange);

        $sales = Sale::customDateFilter('created_at', $from, $to)->get();

        return view('admin.report.saleReport', [
            'sales' => $sales,
            'credit_sales' => $sales->where('saleType', Constants::CREDIT),
            'cashdown_sales' => $sales->where('saleType', Constants::CASH_DOWN),
        ]);
    }

    public function saleReportDetail(Sale $sale)
    {
        $items = $sale->items;
        return view('admin.report.saleReportDetail', [
            'sale' => $sale,
            'items' => $items
        ]);
    }

    public function saleReportByItem(Request $request)
    {
        if ($request->search) {
            $request->session()->flash('alert-success', 'Sale report by item is generated!!');
        }

        $items = Item::whereHas('sales', function (Builder $q) use ($request) {
            $q->customFilter('itemCode', 'LIKE', "%{$request->itemCode}%")
                ->customFilter('name', 'LIKE', "%{$request->itemName}%")
                ->customFilter('color_id', '=', $request->color_id)
                ->customFilter('type_id', '=', $request->type_id)
                ->customFilter('category_id', '=', $request->category_id)
                ->with('color')->with('category');
        });

        return view('admin.report.saleReportByItem', [
            'items' => $items->get(),
            'colors' => Color::all(),
            'types' => Type::all(),
            'categories' => Category::all(),
        ]);
    }

    public function saleReportByItemDetail(Request $request, Item $item)
    {
        if ($request->search) {
            [$from, $to] = $this->getDateRange($request->daterange);

            $sales = $item->sales()->whereDate('sales.created_at', '>=', $from)
                ->whereDate('sales.created_at', '<=', $to)->get();
        } else {
            $sales = $item->sales;
        }

        $itemSales = $sales
            ->mapToGroups(function (Sale $sale) {
                return [
                    $sale->created_at->toDateString() => $sale
                ];
            })->map(function (Collection $sales, $date) {
                return [
                    'quantity' => $sales->sum(function (Sale $sale) {
                        return $sale->pivot->quantity;
                    }),
                    'total' => $sales->sum(function (Sale $sale) {
                        return $sale->pivot->total;
                    }),
                ];
            });

        return view('admin.report.saleReportByItemDetail', [
            'sales' => $itemSales,
            'item' => $item,
        ]);
    }

    public function transferReport(Request $request)
    {
        if ($request->daterange) {
            $request->session()->flash('alert-success', 'Transfer Report for (' . $request->daterange . ') is generated!!');
        }

        [$from, $to] = $this->getDateRange($request->daterange);

        $transfers = Transfer::customDateFilter('created_at', $from, $to)->get();

        return view('admin.report.transferReport', [
            'transfers' => $transfers,
        ]);
    }

    public function receivableReport(Request $request)
    {
        if ($request->daterange) {
            $request->session()->flash('alert-success', 'Receivable Report for (' . $request->daterange . ') is generated!!');
        }

        [$from, $to] = $this->getDateRange($request->daterange);

        $receivables = Receivable::customDateFilter('created_at', $from, $to)->get();

        return view('admin.report.receivableReport', [
            'receivables' => $receivables,
        ]);
    }

    public function customerCreditReport(Request $request)
    {
        if ($request->customer_id) {
            $customer = Customer::find($request->customer_id);
            $request->session()->flash('alert-success', 'Credit Report for ( ' . $customer->name . ' ) is generated!!');
        }

        $customers = Customer::whereHas('creditBalance', function (Builder $q) {
            return $q->where('amount', '>', 0);
        });

        $customers->when($request->customer_id, function (Builder $q) use ($request) {
            return $q->where('id', '=', $request->customer_id);
        });

        $allCustomers = Customer::all();

        return view('admin.report.customerCreditReport', [
            'customers' => $customers->get(),
            'allCustomers' => $allCustomers,
        ]);
    }

    public function customerCreditDetailReport(Request $request, Customer $customer)
    {
        if ($request->daterange) {
            $request->session()->flash('alert-success', 'Credit Detail Report for (' . $request->daterange . ') is generated!!');
        }

        [$from, $to] = $this->getDateRange($request->daterange);

        $sales = $customer->sales()
            ->where('saleType',Constants::CREDIT)
            ->customDateFilter('created_at', $from, $to)
            ->get();

        $receivables = $customer
            ->receivables()
            ->customDateFilter('created_at', $from, $to)
            ->get();

        $receivable_openings = $customer->receivableOpenings;

        return view('admin.report.customerCreditDetailReport', [
            'customer' => $customer,
            'sales' => $sales,
            'receivables' => $receivables,
            'receivable_openings' => $receivable_openings,
            'total_credit' => Sale::sum('balance') + ReceivableOpening::sum('balance'),
            'total_receivable' => Receivable::sum('amount'),
        ]);
    }

    public function stockBalanceReport(Request $request)
    {
        if ($request->search) {
            $request->session()->flash('alert-success', 'Stock Balance report by item is generated!!');
        }

        $stocks = Store::whereHas('item', function (Builder $q) use ($request) {
            $q->customFilter('itemCode', 'LIKE', "%{$request->itemCode}%")
                ->customFilter('name', 'LIKE', "%{$request->itemName}%")
                ->customFilter('color_id', '=', $request->color_id)
                ->customFilter('type_id', '=', $request->type_id)
                ->customFilter('category_id', '=', $request->category_id)
                ->with('color')->with('category');
        });

        return view('admin.report.stockBalanceReport', [
            'stocks' => $stocks->get(),
            'colors' => Color::all(),
            'types' => Type::all(),
            'categories' => Category::all(),
        ]);
    }

    public function processReportByEmployee(Request $request)
    {
        if ($request->daterange) {
            if ($request->employee_id) {
                $employee = Employee::find($request->employee_id);
                $request->session()->flash('alert-success', 'Process Report (' . $request->daterange . ' / ' . $employee->name . ') is generated!!');
            } else {
                $request->session()->flash('alert-success', 'Process Report (' . $request->daterange . ') is generated!!');
            }
        }

        [$from, $to] = $this->getDateRange($request->daterange);

        $inspects = Inspect::customFilter('employee_id', '=', $request->employee_id)
            ->customDateFilter('created_at', $from, $to)->get();

        $issues = Issue::customFilter('employee_id', '=', $request->employee_id)
            ->customDateFilter('created_at', $from, $to)->get();

        return view('admin.report.processReportByEmployee', [
            'employees' => Employee::all(),
            'inspects' => $inspects,
            'repairs' => $issues->where('type', Constants::REPAIR),
            'issues' => $issues->where('type', Constants::NEW),
        ]);
    }

    public function processReportDaily(Request $request)
    {

        $date = Carbon::parse($request->date);

        $inspects = Inspect::whereDate('created_at', $date)
            ->customFilter('item_id', '=', $request->item_id)->get();

        $issues = Issue::whereDate('created_at', $date)
            ->customFilter('item_id', '=', $request->item_id)->get();

        $new_issues = $issues->where('type', Constants::NEW);

        $repairs = $issues->where('type', Constants::REPAIR);

        $items = Item::all();

        if ($request->daterange) {
            $request->session()->flash('alert-success', 'Process Report for (' . $request->daterange . ') is generated!!');
        }

        return view('admin.report.processReportDaily', [
            'inspects' => $inspects,
            'issues' => $new_issues,
            'repairs' => $repairs,
            'items' => $items,
        ]);
    }

    public function getDateRange($dateRange)
    {
        $from = null;
        $to = null;

        if ($dateRange) {
            $dateRange = explode(' - ', $dateRange);
            $from = Carbon::parse($dateRange[0]);
            $to = Carbon::parse($dateRange[1]);
        }

        return [$from, $to];
    }
}
