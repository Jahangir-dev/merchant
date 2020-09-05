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

Route::prefix('customer')->group(function() {
    Route::get('/', 'CustomerController@index');
});


/*Customers Routes*/
Route::middleware(['restrictIp'])->prefix('customer')->group(function() {
	Route::get('/edit', 'HomeController@customer')->name('customer.edit');

	Route::namespace('Auth')->group(function() {
		Route::post('/profile/update', 'RegisterController@update')->name('customer.profile.update');
    });
});
