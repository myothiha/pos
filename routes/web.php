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

    Route::resource('receivable-opening', 'ReceivableOpeningController');

    // sale
    Route::resource('sale', 'SaleController');

    // transfer
    Route::resource('transfer', 'TransferController');

    // stockin
    Route::resource('stock-in', 'StockInController');

    // receivable

    Route::get('/receivable/get-customer', 'ReceivableController@getCustomer');
    Route::resource('receivable', 'ReceivableController');

    // issue

    Route::get('issue', 'IssueController@index');
    Route::delete('issue/{issue}', 'IssueController@destroy');
    Route::put('issue/{issue}', 'IssueController@update');
    Route::get('issue/{issue}/edit', 'IssueController@edit');

    Route::get('issue/get-item', 'IssueController@getItem');
    Route::post('issue/get-item', 'IssueController@searchItems');
    Route::get('issue/{item}/create', 'IssueController@create');
    Route::post('issue/{item}', 'IssueController@store');

    // inspect

    Route::get('inspect', 'InspectController@index');
    Route::delete('inspect/{inspect}', 'InspectController@destroy');
    Route::put('inspect/{inspect}', 'InspectController@update');
    Route::get('inspect/{inspect}/edit', 'InspectController@edit');

    Route::get('inspect/get-item', 'InspectController@getItem');
    Route::post('inspect/get-item', 'InspectController@searchItems');
    Route::get('inspect/{item}/create', 'InspectController@create');
    Route::post('inspect/{item}', 'InspectController@store');
    Route::get('inspect', 'InspectController@index');

    //stockopening

    Route::get('stock-opening', 'StockOpeningController@index');
    Route::delete('stock-opening/{stock-opening}', 'StockOpeningController@destroy');
    Route::put('stock-opening/{stock-opening}', 'StockOpeningController@update');
    Route::get('stock-opening/{stock-opening}/edit', 'StockOpeningController@edit');

    Route::get('stock-opening/get-item', 'StockOpeningController@getItem');
    Route::post('stock-opening/get-item', 'StockOpeningController@searchItems');
    Route::get('stock-opening/{item}/create', 'StockOpeningController@create');
    Route::post('stock-opening/{item}', 'StockOpeningController@store');

    //damage

    Route::get('damage', 'DamageController@index');
    Route::delete('damage/{damage}', 'DamageController@destroy');
    Route::put('damage/{damage}', 'DamageController@update');
    Route::get('damage/{damage}/edit', 'DamageController@edit');

    Route::get('damage/get-item', 'DamageController@getItem');
    Route::post('damage/get-item', 'DamageController@searchItems');
    Route::get('damage/{item}/create', 'DamageController@create');
    Route::post('damage/{item}', 'DamageController@store');



    // report

    Report::routes();
});
