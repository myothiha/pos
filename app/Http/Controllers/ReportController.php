<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Customer;
use App\Employee;
use App\Inspect;
use App\Issue;
use App\Item;
use App\Location;
use App\Receivable;
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
        $stockIns = StockIn::query()
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();
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
        $sales = Sale::query()
            ->when($request->saleType, function ($q) use ($request) {
                return $q->where('saleType', '=', $request->saleType);
            })
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();

        return view('admin.report.saleReport', [
            'sales' => $sales,
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
        $items = Item::whereHas('sales', function (Builder $q) {
            return $q->where('sale_details.quantity', '>', 0);
        });

        if ($request->search) {
            $items->when($request->itemCode, function (Builder $q) use ($request) {
                return $q->where('itemCode', 'LIKE', "%{$request->itemCode}%");
            })
                ->when($request->itemName, function (Builder $q) use ($request) {
                    return $q->where('name', 'LIKE', "%{$request->itemName}%");
                })
                ->when($request->color_id, function (Builder $q) use ($request) {
                    return $q->where('color_id', '=', $request->color_id);
                })
                ->when($request->type_id, function (Builder $q) use ($request) {
                    return $q->where('type_id', '=', $request->type_id);
                })
                ->when($request->category_id, function (Builder $q) use ($request) {
                    return $q->where('category_id', '=', $request->category_id);
                })
                ->with('color')->with('category');
        }

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

            $dateRange = explode(' - ', $request->daterange);
            $from = Carbon::parse($dateRange[0]);
            $to = Carbon::parse($dateRange[1]);

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
        $transfers = Transfer::query()
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();

        return view('admin.report.transferReport', [
            'transfers' => $transfers,
        ]);
    }

    public function receivableReport(Request $request)
    {
        $receivables = Receivable::query()
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();

        return view('admin.report.receivableReport', [
            'receivables' => $receivables,
        ]);
    }

    public function customerCreditReport(Request $request)
    {
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

    public function stockBalanceReport(Request $request)
    {
        $stocks = Store::with(['item']);

        if ($request->search) {

            /*$stores = Store::whereHas('item', function($q) {
                return $q->where('itemCode', 'LIKE', "%{$request->itemCode}%");
            });*/
            $stocks->when($request->itemCode, function (Builder $q) use ($request) {
                return $q->whereHas('item', function ($q) use ($request) {
                    return $q->where('itemCode', 'LIKE', "%{$request->itemCode}%");
                });
            })
                ->when($request->itemName, function (Builder $q) use ($request) {
                    return $q->whereHas('item', function ($q) use ($request) {
                        return $q->where('name', 'LIKE', "%{$request->itemName}%");
                    });
                })
                ->when($request->color_id, function (Builder $q) use ($request) {
                    return $q->whereHas('item', function ($q) use ($request) {
                        return $q->where('color_id', '=', $request->color_id);
                    });
                })
                ->when($request->type_id, function (Builder $q) use ($request) {
                    return $q->whereHas('item', function ($q) use ($request) {
                        return $q->where('type_id', '=', $request->type_id);
                    });
                })
                ->when($request->category_id, function (Builder $q) use ($request) {
                    return $q->whereHas('item', function ($q) use ($request) {
                        return $q->where('category_id', '=', $request->category_id);
                    });
                });
        }


        return view('admin.report.stockBalanceReport', [
            'stocks' => $stocks->get(),
            'colors' => Color::all(),
            'types' => Type::all(),
            'categories' => Category::all(),
        ]);
    }

    public function processReportByEmployee(Request $request)
    {
        $inspects = Inspect::query()
            ->when($request->employee_id, function ($q) use ($request) {
                return $q->where('employee_id', '=', $request->employee_id);
            })
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();

        $issues = Issue::query()
            ->when($request->employee_id, function ($q) use ($request) {
                return $q->where('employee_id', '=', $request->employee_id);
            })
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();

        return view('admin.report.processReportByEmployee', [
            'employees' => Employee::all(),
            'inspects' => $inspects,
            'issues' => $issues,
        ]);
    }

    public function processReportDaily(Request $request)
    {
        $inspects = Inspect::query()
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();

        $issues = Issue::query()
            ->when($request->daterange, function ($q) use ($request) {
                $dateRange = explode(' - ', $request->daterange);
                $from = Carbon::parse($dateRange[0]);
                $to = Carbon::parse($dateRange[1]);
                return $q->whereDate('created_at', '>=', $from)
                    ->whereDate('created_at', '<=', $to);
            })->get();

        return view('admin.report.processReportDaily', [
            'inspects' => $inspects,
            'issues' => $issues,
        ]);
    }
}
