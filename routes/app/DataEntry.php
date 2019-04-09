<?php

namespace Routes\App;

use Route;

class DataEntry
{
    public static function routes()
    {
        Route::resource('employee', 'EmployeeController');

        Route::resource('type', 'TypeController');

        Route::resource('category', 'CategoryController');

        Route::resource('color', 'ColorController');

        Route::resource('location', 'LocationController');

        Route::resource('customer', 'CustomerController');

        Route::resource('supplier', 'SupplierController');

        Route::resource('item', 'ItemController');
    }
}
