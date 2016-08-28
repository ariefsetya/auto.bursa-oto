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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
Route::get('ads/verification', 'HomeController@ads_verification');
Route::get('promotion/verification', 'HomeController@promotion_verification');
Route::get('ads/approve/{id}', 'HomeController@ads_approve');
Route::get('ads/decline/{id}', 'HomeController@ads_decline');
Route::get('promotion/approve/{id}', 'HomeController@promotion_approve');
Route::get('promotion/decline/{id}', 'HomeController@promotion_decline');
Route::get('web/config', 'HomeController@web_config');
Route::get('web/config/{id}', 'HomeController@web_config_edit');
Route::post('web/config/{id}', 'HomeController@web_config_update');
Route::post('vauth/login', 'WelcomeController@login');

Route::get('master/pilar', 'HomeController@master_pilar');
Route::get('master/category_type', 'HomeController@master_category_type');
Route::get('master/category', 'HomeController@master_category');
Route::get('master/province', 'HomeController@master_province');
Route::get('master/city', 'HomeController@master_city');

Route::get('feedback', 'HomeController@feedback');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
