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
use Routes\App\Transaction;

Route::get('/', function () {
    return redirect('/admin');
});

Route::post('/login', 'AuthController@checkLogin');

Route::post('/addItem', 'AddToCartController@addItem');

Route::post('/removeItem', 'AddToCartController@removeItem');

Route::post('/updateItem', 'AddToCartController@updateItem');

Route::middleware(['auth', "role:admin"])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
        return 'admin';
    });
});




Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'role']], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::middleware(['auth', "role:" . \App\User::SALE])->group(function () {
        Transaction::routes();
    });

    Route::middleware(['auth', "role:" . \App\User::PROCESSING])->group(function () {
        \Routes\App\Processing::routes();
    });

    \Routes\App\DataEntry::routes();

    // report
    Report::routes();
});
