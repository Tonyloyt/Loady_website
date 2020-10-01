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
Route::get('/customers/start/schedule', 'MainController@schedule');
Route::get('/customers/start/schedulepickup', 'MainController@schedule_direct');

Route::post('/createaccount','ClientinsertController@init_createaccount'); 
Route::post('/submitlogin','MainController@submitlogin'); 
Route::get('/accounts/clientdashboard','DashboardController@dashboard'); 
Route::get('/logout', 'MainController@logout');
Route::get('/getout', 'MainController@getout');
Route::get('/services_pricing', 'MainController@services_pricing');
Route::get('/loadlyrepeate', 'MainController@loadlyrepeate');
Route::get('/gohome', 'MainController@logout');
Route::get('/loadlyrepeate', 'MainController@loadlyrepeater');
Route::get('/attheoffice', 'MainController@attheoffice');
Route::get('/drycleaning', 'MainController@drycleaning');
Route::get('/otherservices', 'MainController@otherservices');
Route::get('/location', 'MainController@locationsanfransisco');

Route::post('/updateclientdashboard', 'DashboardController@updateprofile');
Route::post('/updateclientdashboard2', 'DashboardController@updateprofile1');

Route::post('/changeclientpassworddashboard', 'DashboardController@changepassword');
Route::post('/customers/start/createpickup', 'MainController@createpickup');
Route::post('/savepaymentdashboard', 'DashboardController@savepayment');

Route::get('/ajaxcall', 'MainController@ajaxcall');
Route::post('/grocery/post', 'DashboardController@store');
 
Route::post('/savecleanpreferencesdashboard', 'DashboardController@savecleaningpreferences');
Route::post('/savedeliverypreferencesdashboard', 'DashboardController@savedeliverypreferences');


Route::get('/androidaddcustomer', 'APIController@androidaddcustomer');
Route::get('/androidaddcustomerorder', 'APIController@androidaddcustomerorder');
Route::get('/androidloadcustomerorder', 'APIController@androidloadcustomerorder');
Route::get('/androidsavepayment', 'APIController@androidsavepayment');
Route::get('/androidcustomerlogin', 'APIController@androidcustomerlogin');
Route::get('/androidcustomerprofile', 'APIController@androidcustomerprofile');
Route::get('/androidupdatecustomerpasswordfamilytypetext', 'APIController@androidupdatecustomerpasswordfamilytypetext');
Route::get('/androidloaditemprices', 'APIController@androidloaditemprices');
Route::get('/androidupdatecustomerprefference', 'APIController@androidupdatecustomerprefference');
Route::get('/androidloadquestions', 'APIController@androidloadquestions');


Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('/callback/facebook', 'Auth\LoginController@handleFacebookCallback'); 
//
Route::get('/reloadmypage', 'DashboardController@reloadpage');
Route::post('/usersubscription', 'DashboardController@subscription');
Route::post('/unsub', 'DashboardController@removesub');



/*
Route::get('/schedulepickup','MainController@schedulepickup');
Route::get('/accounts/login', 'MainController@login');
Route::get('/customers/start', 'MainController@signup');
Route::post('/customers/start/schedule', 'MainController@schedule');
Route::post('/createaccount','ScheduleController@createaccount'); 
Route::post('/submitlogin','MainController@submitlogin'); 
Route::get('/accounts/clientdashboard','DashboardController@dashboard'); 
Route::get('/logout', 'MainController@logout');
Route::get('/services_pricing', 'MainController@services_pricing');
Route::get('/loadlyrepeate', 'MainController@loadlyrepeate');
Route::get('/gohome', 'MainController@logout');

*/
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
