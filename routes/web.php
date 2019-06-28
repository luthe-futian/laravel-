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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**后台路由*/
Route::get('/admin/login','Admin\LoginController@index');
Route::get('admin/logout','Admin\LoginController@logout');
Route::post('admin/login','Admin\LoginController@login');
Route::post('admin/skin','Admin\AdminController@skin');
Route::group(['middleware'=>['auth.admin:admin','permission:admin'],'prefix' => 'admin','namespace' => 'Admin'],function(){

    Route::get('index','IndexController@index');
    Route::get('menus/tests','MenuController@aaa');
    Route::resource('menus', 'MenuController');
    Route::get('menus/{menu}/{value}/status','MenuController@status');
    Route::get('menus/{menu}/{value}/menu','MenuController@menu');
    Route::get('menus/{menu}/{value}/display','MenuController@display');

    Route::resource('admins','AdminController');
    Route::get('admins/{admin}/{value}/status','AdminController@status');

    Route::resource('groups','GroupController');
    Route::get('groups/{group}/{value}/status','GroupController@status');
    Route::get('groups/{group}/permission','GroupController@permission');
    Route::post('groups/{group}/permissionStore','GroupController@permissionStore');

    Route::get('clients','ClientController@index');
});
