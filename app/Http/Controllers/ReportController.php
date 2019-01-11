<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Item;
use App\Sale;
use App\StockIn;
use App\Type;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ReportController extends Controller
{
    public function stockInReport()
    {
        $stockIns = StockIn::all();

        return view('admin.report.stockInReport', [
            'stockIns' => $stockIns,
        ]);
    }

    public function saleReport(Request $request)
    {
        $sales = Sale::all();

        return view('admin.report.saleReport', [
            'sales' => $sales,
        ]);
    }

    public function saleReportFilter(Request $request)
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

    public function transferReport()
    {
        return view('admin.report.transferReport');
    }

    public function transferReportFilter(Request $request)
    {
        //
    }

    public function receivableReport()
    {
        return view('admin.report.receivableReport');
    }

    public function receivableReportFilter(Request $request)
    {
        //
    }

    public function customerCreditReport()
    {
        return view('admin.report.customerCreditReport');
    }

    public function customerCreditReportFilter(Request $request)
    {
        //
    }

    public function stockBalanceReport()
    {
        return view('admin.report.stockBalanceReport');
    }

    public function stockBalanceReportFilter(Request $request)
    {
        //
    }

    public function stockInOutReport()
    {
        return view('admin.report.stockInOutReport');
    }

    public function stockInOutReportFilter(Request $request)
    {
        //
    }

    public function processReportByEmployee()
    {
        return view('admin.report.processReportByEmployee');
    }

    public function processReportByEmployeeFilter(Request $request)
    {
        //
    }

    public function processReportDaily()
    {
        return view('admin.report.processReportDaily');
    }

    public function processReportDailyFilter(Request $request)
    {
        //
    }
}
