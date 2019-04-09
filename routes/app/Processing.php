<?php

namespace Routes\App;

use Route;

class Processing
{
    public static function routes()
    {
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
    }
}
