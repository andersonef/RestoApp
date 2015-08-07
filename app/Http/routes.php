<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('/navegacao/menu', 'Navigation\MenuController');
Route::resource('/auth', 'AuthController');
Route::get('/', ['uses' => 'AuthController@index']);

Route::group(['middleware' => 'auth', 'prefix' => 'app'], function(){
    Route::resource('dashboard', 'App\DashboardController');
});
