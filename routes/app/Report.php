<?php

namespace Routes\App;

use Route;

class Report
{
    public static function routes()
    {
        Route::get('/stockin-report', 'ReportController@stockInReport');
        Route::get('/stockin-report-detail/{stockIn}', 'ReportController@stockInReportDetail');

        Route::get('/sale-report', 'ReportController@saleReport');
        Route::get('/sale-report-detail/{sale}', 'ReportController@saleReportDetail');

        Route::get('/sale-report-by-item', 'ReportController@saleReportByItem');
        Route::get('/sale-report-item-detail/{item}', 'ReportController@saleReportByItemDetail');

        Route::get('/transfer-report', 'ReportController@transferReport');
        Route::get('/receivable-report', 'ReportController@receivableReport');
        Route::get('/customer-credit-report', 'ReportController@customerCreditReport');
        Route::get('/customer-credit-detail-report/{customer}', 'ReportController@customerCreditDetailReport');

        Route::get('/stock-balance-report', 'ReportController@stockBalanceReport');

        Route::get('/issues-report-by-employee', 'ReportController@issuesReportByEmployee');

        Route::get('/process-reportby-employee', 'ReportController@processReportByEmployee');
        Route::get('/process-report-daily', 'ReportController@processReportDaily');
    }
}
