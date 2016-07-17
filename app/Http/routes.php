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
Route::get('ads/approve/{id}', 'HomeController@ads_approve');
Route::get('ads/decline/{id}', 'HomeController@ads_decline');
Route::get('web/config', 'HomeController@web_config');
Route::get('web/config/{id}', 'HomeController@web_config_edit');
Route::post('web/config/{id}', 'HomeController@web_config_update');
Route::post('vauth/login', 'WelcomeController@login');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
