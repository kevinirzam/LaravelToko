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
    return view('inilaman');
});

Route::get('/brokoli', 'CapungController@pujangga');

//sekarang bikin route untuk customer
Route::get('/dataCustomer','CustomerController@cust');
//sekarang bikin route untuk supplier
Route::get('/dataSupplier','SupplierController@sups');
//sekarang bikin route untuk employee
Route::get('/dataEmployee','EmployeeController@emp');

//Create data
Route::get('/customer/create','CustomerController@create');
Route::get('/supplier/create','SupplierController@create');
Route::get('/employee/create','EmployeeController@create');




//Store data
Route::get('/customer/store','CustomerController@store');
Route::get('/employee/store','EmployeeController@store');
Route::get('/home','HomeController@index');




Route::resource('customer','CustomerController');
Route::resource('supplier','SupplierController');
Route::resource('employee','EmployeeController');
