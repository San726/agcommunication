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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/manager', 'managerController@index');
Route::get('/manage', 'managerController@index');

Route::get('/bill', 'managerController@bill_receive');
Route::get('/user', 'managerController@create_user');
Route::get('/profile', 'managerController@profile');


Route::get('/manage', 'managerController@index');
