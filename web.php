<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});



Route::get('/schedulepickup','MainController@schedulepickup');
Route::get('/accounts/login', 'MainController@login');
Route::get('/customers/start', 'MainController@signup');
Route::post('/customers/start/schedule', 'MainController@schedule');
Route::post('/createaccount','ClientinsertController@createaccount'); 
Route::post('/submitlogin','MainController@submitlogin'); 
Route::get('/accounts/clientdashboard','DashboardController@dashboard'); 
Route::get('/logout', 'MainController@logout');