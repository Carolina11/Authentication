<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('signUp', 'AuthController@signUp');
Route::post('signIn', 'AuthController@signIn');
Route::get('getUser', 'AuthController@getUser');

Route::any('{path?}', 'MainController@index')->where("path", ".+");
