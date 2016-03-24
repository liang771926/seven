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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('indexadd', 'IndexController@indexadd');
Route::get('indexsel', 'IndexController@indexsel');
Route::get('indexupd', 'IndexController@indexupd');
Route::get('indexupde', 'IndexController@indexupde');
Route::get('indexdel', 'IndexController@indexdel');
Route::get('index', 'IndexController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);