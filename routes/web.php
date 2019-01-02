
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
//    Cart::add('11', 'Product 3', 1, 1100000);
    $result = Cart::content();
    return $result->toJson();
//    dd($result->toJson());
//    return view('welcome');
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

    Route::get('/sale/create', 'SaleController@create');

    Route::get('/transfer/create', 'TransferController@create');

    Route::get('/stockin/create', 'StockInController@create');

    Route::get('/issue/create', 'IssueController@create');

    Route::get('/stockinreport', 'ReportController@stockInReport');

    Route::get('/salereport', 'ReportController@saleReport');

    Route::get('/salereportbyitem', 'ReportController@saleReportByItem');

    Route::get('/transferreport', 'ReportController@transferReport');

    Route::get('/receivablereport', 'ReportController@receivableReport');

    Route::get('/customercreditreport', 'ReportController@customerCreditReport');

    Route::get('/stockbalancereport', 'ReportController@stockBalanceReport');

    Route::get('/stockinoutreport', 'ReportController@stockInOutReport');

    Route::get('/processreportbyemployee', 'ReportController@processReportByEmployee');

    Route::get('/processreportdaily', 'ReportController@processReportDaily');

});
