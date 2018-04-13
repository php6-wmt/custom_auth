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

Route::group(['prefix' => 'admin', 'namespace' => 'Postal\Admin'], function () {

    Route::get('/', 'AuthController@showLoginForm');
    Route::get('login', 'AuthController@showLoginForm');
    Route::post('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');

    Route::group(['middleware' => 'auth.check.admin'], function () {
        Route::resource('dashboard', 'DashboardController', ['except' => [
            'create', 'update'
        ]]);
    });
});


Route::group(['prefix' => 'superadmin', 'namespace' => 'Postal\SuperAdmin'], function () {

    Route::get('/', 'AuthController@showLoginForm');
    Route::get('login', 'AuthController@showLoginForm');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');

    Route::group(['middleware' => 'auth.check.superadmin'], function () {
        Route::resource('dashboard', 'DashboardController', ['except' => [
            'create', 'update'
        ]]);
    });
});


Route::group(['namespace' => 'Postal\User'], function () {

    Route::get('/', 'AuthController@showLoginForm');
    Route::get('login', 'AuthController@showLoginForm');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');

    Route::group(['middleware' => 'auth.check.user'], function () {
        Route::resource('dashboard', 'DashboardController', ['except' => [
            'create', 'update'
        ]]);
    });
});