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

Route::get('/', 'HomeController@home');
Route::post('/', 'CreateController@create_user');

Route::get('/login', 'CustomLoginController@display_login');
Route::post('/login', 'CustomLoginController@login');

Route::get('/logout', 'CustomLoginController@logout');

Route::middleware('auth')->group(function(){

	Route::get('/create_pool', 'DisplayController@display_create_pool');
	Route::post('/create_pool', 'CreateController@create_pool');

	Route::get('/pool', 'DisplayController@display_pool');
	Route::post('/pool', 'ModifController@add_pay');

	Route::get('/modif_pool', 'DisplayController@display_modif_pool');
	Route::post('/modif_pool', 'ModifController@modif_pool');

	Route::get('/modif_profile', 'DisplayController@profile');
	Route::post('/modif_profile', 'ModifController@modif_profile');


});