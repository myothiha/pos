
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /*foreach(Cart::content() as $row) {
        echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
    }*/
    $result = Cart::instance(\App\Constants\Cart::STOCK_IN)->content();
    return $result->toJson();
});

Route::post('/login', 'AuthController@checkLogin');

Route::post('/addItem', 'AddToCartController@addItem');

Route::post('/removeItem', 'AddToCartController@removeItem');

Route::post('/updateItem', 'AddToCartController@updateItem');

Route::prefix('admin')->middleware(['auth', "role:admin"])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
    });
});

Route::prefix('ygn')->middleware(['auth', 'role:ygn_sale'])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
    });
});

Route::prefix('mdy')->middleware(['auth', 'role:mdy_sale'])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
    });
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::resource('employee', 'EmployeeController');

    Route::resource('type', 'TypeController');

    Route::resource('category', 'CategoryController');

    Route::resource('color', 'ColorController');

    Route::resource('location', 'LocationController');

    Route::resource('customer', 'CustomerController');

    Route::resource('supplier', 'SupplierController');

    Route::resource('item', 'ItemController');

    Route::resource('damage', 'DamageController');

    Route::resource('receivableopening', 'ReceivableOpeningController');

    // sale
    Route::get('/sale/create', 'SaleController@create');

    Route::post('/sale', 'SaleController@store');


    Route::get('/transfer/create', 'TransferController@create');
    Route::post('/transfer', 'TransferController@store');

    // stockin

    Route::get('/stockin/create', 'StockInController@create');

    Route::post('/stockin/', 'StockInController@store');

    // issue

    Route::get('/issue', 'IssueController@getItem');
    Route::post('/issue', 'IssueController@searchItems');


    Route::get('issue/{item}/create', 'IssueController@create');

    Route::post('issue/{item}', 'IssueController@store');

    Route::get('inspect/', 'InspectController@index');
    Route::get('inspect/{issue}/create', 'InspectController@create');
    Route::post('inspect/{issue}', 'InspectController@store');

    //stockopening

    Route::get('/stock-opening', 'StockOpeningController@getItem');

    Route::post('/stock-opening', 'StockOpeningController@searchItems');

    Route::get('stock-opening/{item}/create', 'StockOpeningController@create');
    
    Route::post('stock-opening/{item}', 'StockOpeningController@store');

    //damage
    Route::get('/damage', 'DamageController@getItem');

    Route::post('/damage', 'DamageController@searchItems');

    Route::get('damage/{item}/create', 'DamageController@create');
    
    Route::post('damage/{item}', 'DamageController@store');

    // receivable

    Route::get('/receivable/getcustomer', 'ReceivableController@getCustomer');

    Route::get('/receivable/create', 'ReceivableController@create');

    Route::post('/receivable', 'ReceivableController@store');

    // report

    Route::get('/stockinreport', 'ReportController@stockInReport');
    Route::post('/stockinreport', 'ReportController@stockInReportFilter');

    Route::get('/salereport', 'ReportController@saleReport');
    Route::post('/salereport', 'ReportController@saleReportFilter');

    Route::get('/salereportbyitem', 'ReportController@saleReportByItem');
    Route::post('/salereportbyitem', 'ReportController@saleReportByItemFilter');

    Route::get('/transferreport', 'ReportController@transferReport');
    Route::post('/transferreport', 'ReportController@transferReportFilter');

    Route::get('/receivablereport', 'ReportController@receivableReport');
    Route::post('/receivablereport', 'ReportController@receivableReportFilter');

    Route::get('/customercreditreport', 'ReportController@customerCreditReport');
    Route::post('/customercreditreport', 'ReportController@customerCreditReportFilter');

    Route::get('/stockbalancereport', 'ReportController@stockBalanceReport');
    Route::post('/stockbalancereport', 'ReportController@stockBalanceReportFilter');

    Route::get('/stockinoutreport', 'ReportController@stockInOutReport');
    Route::post('/stockinoutreport', 'ReportController@stockInOutReportFilter');


    Route::get('/processreportbyemployee', 'ReportController@processReportByEmployee');
    Route::post('/processreportbyemployee', 'ReportController@processReportByEmployeeFilter');

    Route::get('/processreportdaily', 'ReportController@processReportDaily');
    Route::post('/processreportdaily', 'ReportController@processReportDailyFilter');
});
