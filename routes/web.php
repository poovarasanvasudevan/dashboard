<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MobileController@index');
Route::get('/home', 'MobileController@home');
Route::get('/logout', 'MobileController@logout');
Route::get('/users', 'MobileController@users');
Route::post('/login', 'MobileController@login');
