<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });


    // app/Http/routes.php

    Route::group(['prefix' => LaravelLocalization::setLocale()], function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', function()
        {
            return View::make('search');
        });

            Route::get('search', 'SearchController@getIndex');
            //Route::get('search', 'SearchController@getIndex');

            Route::post('search', 'SearchController@getInfos');


        Route::get('test',function(){
            return View::make('test');
        });
    });


//Route::controller('{lang}/search', 'searchController');
