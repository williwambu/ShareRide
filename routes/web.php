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


Route::group(['middleware' => ['web']], function(){

	Route::get('/', function () {
    	return view('index');
	});

	Route::get('/signup', function (){
		return view('layouts.signup');
	});

	Route::post('/signup', ['as' => 'register', 'uses' => 'RegisterController@create']);
});