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
    Route::get('/', 'CustomerController@index')->name('customer');
    Route::get('/register', 'RegisterController@index')->name('customer.register');
    Route::get('/profile', 'UserController@index')->name('customer.profile');
//    Profile Update
    Route::post('/profile/basic/update', 'UserController@update')->name('customer.profile.basic.update');
    Route::post('/profile/about/update', 'UserController@updateAbout')->name('customer.profile.about.update');

});


/*Customers Routes*/
/*Route::middleware(['restrictIp'])->prefix('customer')->group(function() {
	Route::get('/edit', 'HomeController@customer')->name('customer.edit');

	Route::namespace('Auth')->group(function() {
		Route::post('/profile/update', 'RegisterController@update')->name('customer.profile.update');
    });
});*/
