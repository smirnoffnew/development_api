<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'middleware' => 'cors'
], function() {
    Route::post('signin', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('current', 'AuthController@currentUser');

        Route::get('users', 'UserController@getUsers');
        Route::get('users/{id}', 'UserController@getUser');

        Route::group([
            'middleware' => 'admin'
        ], function() {
            Route::delete('users/{id}', 'UserController@deleteUser');
        });
    });
});
