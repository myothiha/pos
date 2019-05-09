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

use Routes\App\DataEntry;
use Routes\App\Processing;
use Routes\App\Report;
use Routes\App\Transaction;

Route::get('/', function () {

    return redirect('/admin');
});

Route::get('login', 'LoginController@login')->name('login');

Route::post('/login', 'LoginController@checkLogin');

Route::get('/logout', 'LoginController@logout');

Route::post('/addItem', 'AddToCartController@addItem');

Route::post('/removeItem', 'AddToCartController@removeItem');

Route::post('/updateItem', 'AddToCartController@updateItem');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::middleware('sale')->group(function () {
        Transaction::routes();
    });

    Route::middleware(['processing'])->group(function () {
        Processing::routes();
    });

    Route::middleware(['admin'])->group(function () {
        // report
        Report::routes();
    });

    DataEntry::routes();

});
