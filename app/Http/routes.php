<?php

/* Application Routes */
Route::group(['middleware' => ['web']], function () {
    /* auth */
    Route::auth();

    /* home */
    // Route::get('/', 'HomeController@index');
    Route::get('/', 'VisitController@index');

    /* paymentMethod */
    Route::get('visits', 'VisitController@index');
    Route::post('visits/search', 'VisitController@index');
    Route::post('visit', 'VisitController@store');
    Route::get('visit/{visit}/edit', 'VisitController@index');
    Route::patch('visit/{visit}', 'VisitController@update');
    Route::delete('visit/{visit}', 'VisitController@destroy');

    /* logs */
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    //  Route::get('migrate/{key}', 'HomeController@migrate');

});

// Artisan::call('migrate:refresh');
// Artisan::call('optimize');
// Artisan::call('route:cache');
// Artisan::call('config:cache');
