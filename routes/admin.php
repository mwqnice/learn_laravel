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
	
	Route::get('login', 'LoginController@login')->name('admin.login');
	
	/**需要登录认证模块**/
    Route::middleware(['middleware'=>'admin.auth'])->group(function (){
    	Route::get('index', 'IndexController@index');
    });
});


