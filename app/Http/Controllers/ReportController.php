<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function stockInReport()
    {
        return view('admin.report.stockInReport');
    }

   	public function saleReport()
    {
        return view('admin.report.saleReport');
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
