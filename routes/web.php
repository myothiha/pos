
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
    return view('welcome');
});

Route::post('/login', 'AuthController@checkLogin');

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

    Route::resource('stockopening', 'StockOpeningController');

    Route::resource('receiveableopening', 'ReceiveableOpeningController');

    Route::resource('damage', 'DamageController');

    Route::resource('store', 'StoreController');

    Route::resource('stockin', 'StockInController');

    Route::resource('stockindetail', 'StockInDetailController');

    Route::resource('sale', 'SaleController');

    Route::resource('saledetail', 'SaleDetailController');

    Route::resource('receiveable', 'ReceiveableController');

    Route::resource('issue', 'IssueController');

    Route::resource('inspect', 'InspectController');

    Route::resource('Repair', 'RepairController');

});
