<?php

namespace Routes\App;

use Route;

class Transaction
{
    public static function routes()
    {
        // receivable-opening
        Route::resource('receivable-opening', 'ReceivableOpeningController');

        // sale
        Route::resource('sale', 'SaleController');

        // transfer
        Route::resource('transfer', 'TransferController');

        // stock-in
        Route::resource('stock-in', 'StockInController');

        // receivable
        Route::get('/receivable/get-customer', 'ReceivableController@getCustomer');
        Route::resource('receivable', 'ReceivableController');

        //Damage
        Route::get('damage', 'DamageController@index');
        Route::delete('damage/{damage}', 'DamageController@destroy');
        Route::put('damage/{damage}', 'DamageController@update');
        Route::get('damage/{damage}/edit', 'DamageController@edit');

        Route::get('damage/get-item', 'DamageController@getItem');
        Route::post('damage/get-item', 'DamageController@searchItems');
        Route::get('damage/{item}/create', 'DamageController@create');
        Route::post('damage/{item}', 'DamageController@store');

        //Stock Opening
        Route::get('stock-opening', 'StockOpeningController@index');
        Route::delete('stock-opening/{stockOpening}', 'StockOpeningController@destroy');
        Route::put('stock-opening/{stockOpening}', 'StockOpeningController@update');
        Route::get('stock-opening/{stockOpening}/edit', 'StockOpeningController@edit');

        Route::get('stock-opening/get-item', 'StockOpeningController@getItem');
        Route::post('stock-opening/get-item', 'StockOpeningController@searchItems');
        Route::get('stock-opening/{item}/create', 'StockOpeningController@create');
        Route::post('stock-opening/{item}', 'StockOpeningController@store');

    }
}
