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

get('/', 'HomesController@index');
get('register', 'RegisterController@index');
Route::resource('register_action', 'RegisterController', ['only' => ['store']]);
get('login','RegisterController@login');
//Route::resource('login_action', 'RegisterController', ['only' => ['doLogin']]);
post('login', ['uses' => 'RegisterController@doLogin']);


