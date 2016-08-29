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
//    return view('errors.000');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Route::get('/manager', 'managerController@index');
//Route::get('/manage', 'managerController@index');

//Route::get('/bill_receive', 'managerController@bill_receive')
Route::any('/user', 'managerController@create_user');
//Route::get('/profile', 'managerController@profile');
Route::any('/area', 'managerController@create_area');

Route::get('/customer_info', 'reportController@CustomerInfo')->middleware('hasReport');
Route::get('/monthly_report', 'reportController@monthly_report')->middleware('hasReport');

Route::get('/due', 'reportController@dueStatus')->middleware('hasReport');
Route::get('/paid', 'reportController@paidStatus')->middleware('hasReport');

//Route::get('/bill_by_date', 'reportController@datewisebillsheetafterpost');

Route::post('/bill_by_date', 'reportController@datewisebillsheetafterpost');

//Route::post('/bill-paid', 'reportController@datewisebillpaidsheet');
//Route::post('/bill-paid', 'reportController@datewisebillpaidsheetafterpost');

Route::get('/area_bill', 'reportController@area_bill');

Route::get('/statement', 'managerController@statement');

Route::get('/b/{name}', 'managerController@bill_pay')->middleware('hasBill');

//Route::get('/profile/{id}', 'managerController@showProfile');

Route::any('/p/{name}', 'managerController@showProfileByName');
