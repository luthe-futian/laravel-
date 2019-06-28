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
Route::post('auth/login','Api\AuthController@login');

Route::group(['middleware'=>'auth:api'],function(){
    Route::get('auth/logout','Api\AuthController@logout');
    Route::get('user','Api\IndexController@index');
});