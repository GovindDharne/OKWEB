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

Route::get('/', function () {
    return view('welcome');    
});

Route::get('user-registration','userRegistrationController@Registeruser');
Route::get('getcities/{stateid}','userRegistrationController@loadcities');
Route::post('registeruser','userRegistrationController@insertuserdetails');
Route::post('insertregisteruser','userRegistrationController@insertusermaster');
Route::post('insertoffer','newofferController@offerinsert');
Route::get('helth_offers','HealthofferController@offerhelth');  
Route::post('inserthealth','HealthofferController@healthofferinsert');

Route::get('createoffer','newofferController@addnewoffer');

Route::get('paymentstatus','paymentController@paystatus');
