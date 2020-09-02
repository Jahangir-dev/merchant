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


Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

/*Admin Routes*/
Route::namespace("Admin")->prefix('admin')->group(function() {

	Route::get('/profile', 'HomeController@myProfile')->name('admin.profile');
	Route::post('/myprofile/update/{id}', 'HomeController@updateProfile')->name('admin.myprofile.update');

	Route::get('/ip', 'IPAddressController@index')->name('admin.ip');
	Route::get('/ip/delete/{id}', 'IPAddressController@destroy')->name('admin.ip.delete');
	
	Route::get('/', 'HomeController@index')->name('admin.home');
	
	Route::get('/merchants', 'HomeController@merchantsList')->name('admin.merchants.list');
	Route::get('/merchants/edit/{id}', 'HomeController@edit')->name('admin.merchants.edit');
	Route::get('/merchants/delete/{id}', 'HomeController@delete')->name('admin.merchants.delete');
	
	Route::get('/customers', 'HomeController@customersList')->name('admin.customers.list');
	Route::get('/customers/delete/{id}', 'HomeController@delete')->name('admin.customers.delete');
	Route::get('/customers/edit/{id}', 'HomeController@edit')->name('admin.customers.edit');
	
	Route::post('/profile/update/{id}', 'HomeController@updateUser')->name('admin.profile.update');

	Route::namespace('Auth')->group(function() {
		Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
		Route::post('/login', 'LoginController@login');
		Route::post('logout', 'LoginController@logout')->name('admin.logout');
	});
});

/*Merchants Routes*/
Route::middleware(['restrictIp'])->prefix('merchant')->group(function() {
	Route::get('/', 'HomeController@index')->name('merchant.home');
	Route::get('/edit', 'HomeController@merchant')->name('merchant.edit');

	Route::namespace('Auth')->group(function() {
		Route::post('/profile/update', 'RegisterController@update')->name('merchant.profile.update');
    });
});

/*Customers Routes*/
Route::middleware(['restrictIp'])->prefix('customer')->group(function() {
	Route::get('/', 'HomeController@index')->name('customer.home');
	Route::get('/edit', 'HomeController@customer')->name('customer.edit');

	Route::namespace('Auth')->group(function() {
		Route::post('/profile/update', 'RegisterController@update')->name('customer.profile.update');
    });
});

