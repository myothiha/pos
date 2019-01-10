<?php

namespace App\Http\Controllers;

use App\Sale;
use App\StockIn;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function stockInReport()
    {
        $stockIns = StockIn::all();
        
        return view('admin.report.stockInReport', [
            'stockIns' => $stockIns,
        ]);
    }

   	public function saleReport()
    {
        $sales = Sale::all();

        return view('admin.report.saleReport', [
            'sales' => $sales,
        ]);
    }

    public function saleReportByItem()
    {
        return view('admin.report.saleReportByItem');
    }

    public function transferReport()
    {
        return view('admin.report.transferReport');
    }

    public function receivableReport()
    {
        return view('admin.report.receivableReport');
    }

    public function customerCreditReport()
    {
        return view('admin.report.customerCreditReport');
    }

    public function stockBalanceReport()
    {
        return view('admin.report.stockBalanceReport');
    }

    public function stockInOutReport()
    {
        return view('admin.report.stockInOutReport');
    }

    public function processReportByEmployee()
    {
        return view('admin.report.processReportByEmployee');
    }

    public function processReportDaily()
    {
        return view('admin.report.processReportDaily');
    }
}
