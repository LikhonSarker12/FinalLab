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

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::get('/registration/admin', 'RegistrationController@getRegistrationAdmin')->name('registration.admin');
Route::get('/registration/customer', 'RegistrationController@getRegistrationCustomer')->name('registration.customer');
Route::post('/registration/admin', 'RegistrationController@postRegistrationAdmin');
Route::post('/registration/customer', 'RegistrationController@postRegistrationCustomer');
 
Route::group(['middleware'=>['session']], function(){

Route::group(['middleware'=>['admintype']], function(){

    Route::get('/home/admin', 'HomeController@adminIndex')->name('adminhome.index');
    Route::get('/home/profile', 'AdminController@index')->name('admin.profile');
    Route::get('/home/customer/list', 'AdminController@show')->name('admin.customerlist');
    Route::get('/home/customer/details/{id}', 'AdminController@customerdetails')->name('adminCustomer.details');
    Route::get('/home/customer/delete/{id}', 'AdminController@destroy')->name('adminCustomer.delete');
    Route::get('/home/update/profile', 'AdminController@update')->name('adminupdate.profile');
    Route::post('/home/update/profile', 'AdminController@store');	

    Route::get('/home/medicine/list', 'MedicineController@index')->name('medicine.list');
    Route::get('/home/medicine/add', 'MedicineController@show')->name('medicine.add');
    Route::post('/home/medicine/add', 'MedicineController@store')->name('medicine.add');

    Route::get('/home/medicine/update/{id}', 'MedicineController@update')->name('medicine.update');
    Route::post('/home/medicine/update/{id}', 'MedicineController@postupdate');
    Route::get('/home/medicine/delete/{id}', 'MedicineController@destroy')->name('medicine.delete');   


    });	
    Route::group(['middleware'=>['customertype']], function(){
    
        Route::get('/home/customer', 'HomeController@customerIndex')->name('home.index');

        Route::get('/home/customer/profile', 'CustomerController@index')->name('customer.profile');
        Route::get('/home/update/profile', 'CustomerController@update')->name('customer.updateprofile');
        Route::post('/home/update/profile', 'CustomerController@store');

        Route::get('/home/customer/medicine', 'CustomerController@show')->name('medicine.index');
        Route::get('/home/customer/order/{id}', 'CustomerController@order')->name('medicine.order');
        Route::post('/home/customer/order/{id}', 'CustomerController@orderInsert');
        Route::get('/home/order/list', 'OrderController@show')->name('order.list');
        Route::get('/home/order/delete/{id}', 'OrderController@destroy')->name('order.delete');
        Route::get('/home/order/update/{id}', 'OrderController@edit')->name('order.update');
        Route::post('/home/order/update/{id}', 'OrderController@update');
        
        });	
    });	   
    
