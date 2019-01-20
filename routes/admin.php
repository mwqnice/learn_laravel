<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'admin'],function($route){
	
	Route::get('login', 'AdminController@login')->name('admin.login');

    Route::get('index', 'IndexController@index')->name('admin.index');

    Route::get('user', 'UserController@index')->name('admin.user');

    Route::get('addUser', 'UserController@addUser')->name('admin.addUser');
	
	/**需要登录认证模块**/
//    Route::middleware(['middleware'=>'admin.auth'])->group(function (){
//    	Route::get('index', 'IndexController@index');
//    });
});


