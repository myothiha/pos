<?php

namespace Routes\App;

use Route;

class Report
{
    public static function routes()
    {
        Route::get('/stockinreport', 'ReportController@stockInReport');

        Route::get('/salereport', 'ReportController@saleReport');

        Route::get('/sale-report-by-item', 'ReportController@saleReportByItem');
        Route::get('/sale-report-item-detail/{item}', 'ReportController@saleReportByItemDetail');

        Route::get('/transferreport', 'ReportController@transferReport');
        Route::get('/receivablereport', 'ReportController@receivableReport');
        Route::get('/customercreditreport', 'ReportController@customerCreditReport');
        Route::get('/stockbalancereport', 'ReportController@stockBalanceReport');

        Route::get('/processreportbyemployee', 'ReportController@processReportByEmployee');
        Route::get('/processreportdaily', 'ReportController@processReportDaily');
    }
}
