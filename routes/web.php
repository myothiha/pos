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

use Routes\App\Report;

Route::get('/', function () {
    return redirect('/admin');
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

    Route::resource('receivable-opening', 'ReceivableOpeningController');

    // sale
    Route::get('/sale/create', 'SaleController@create');

    Route::post('/sale', 'SaleController@store');


    Route::get('/transfer/create', 'TransferController@create');
    Route::post('/transfer', 'TransferController@store');

    // stockin

    Route::get('/stock-in/create', 'StockInController@create');

    Route::post('/stock-in/', 'StockInController@store');

    // issue

    Route::get('/issue', 'IssueController@getItem');
    Route::post('/issue', 'IssueController@searchItems');


    Route::get('issue/{item}/create', 'IssueController@create');

    Route::post('issue/{item}', 'IssueController@store');

    // inspect

    Route::get('/inspect', 'InspectController@getItem');
    Route::post('/inspect', 'InspectController@searchItems');


    Route::get('inspect/{item}/create', 'InspectController@create');

    Route::post('inspect/{item}', 'InspectController@store');

    //stockopening

    Route::get('/stock-opening', 'StockOpeningController@getItem');

    Route::post('/stock-opening', 'StockOpeningController@searchItems');

    Route::get('stock-opening/{item}/create', 'StockOpeningController@create');

    Route::post('stock-opening/{item}', 'StockOpeningController@store');

    //damage
    //
    Route::get('/damage', 'DamageController@getItem');

    Route::post('/damage', 'DamageController@searchItems');

    Route::get('damage/{item}/create', 'DamageController@create');

    Route::post('damage/{item}', 'DamageController@store');

    // receivable

    Route::get('/receivable/get-customer', 'ReceivableController@getCustomer');

    Route::get('/receivable/create', 'ReceivableController@create');

    Route::post('/receivable', 'ReceivableController@store');

    // report

    Report::routes();
});
