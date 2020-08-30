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

Route::get('/home', 'HomeController@index')->name('home');

/*Admin Routes*/
Route::get('/ip', 'IPAddressController@index')->name('admin.ip');
Route::get('/ip/delete/{id}', 'IPAddressController@destroy')->name('admin.ip.delete');
Route::namespace("Admin")->prefix('admin')->group(function() {
	Route::get('/', 'HomeController@index')->name('admin.home');
	Route::get('/merchants', 'HomeController@merchantsList')->name('admin.merchant.list');
	Route::get('/customers', 'HomeController@customersList')->name('admin.customer.list');
	Route::get('/merchant/delete/{id}', 'HomeController@delete')->name('admin.merchant.delete');
	Route::get('/merchant/edit/{id}', 'HomeController@edit')->name('admin.merchant.edit');
	Route::get('/customer/delete/{id}', 'HomeController@delete')->name('admin.customer.delete');
	Route::get('/customer/edit/{id}', 'HomeController@edit')->name('admin.customer.edit');
	Route::post('/profile/update/{id}', 'HomeController@updateUser')->name('admin.profile.update');

	Route::namespace('Auth')->group(function() {
		Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
		Route::post('/login', 'LoginController@login');
		Route::post('logout', 'LoginController@logout')->name('admin.logout');
	});
});

/*Merchants Routes*/
Route::middleware(['restrictIp'])->namespace("Merchant")->prefix('merchant')->group(function() {
	Route::get('/', 'HomeController@index')->name('merchant.home');
	Route::namespace('Auth')->group(function() {
		Route::get('/register', 'RegisterController@showRegisterForm')->name('merchant.register');
		Route::post('/register', 'RegisterController@createMerchent')->name('merchant.register');
		Route::post('/profile/update', 'RegisterController@update')->name('merchant.profile.update');
		Route::get('/login', 'LoginController@showLoginForm')->name('merchant.login');
		Route::post('/login', 'LoginController@login');
		Route::post('logout', 'LoginController@logout')->name('merchant.logout');
	});
});

/*Customers Routes*/
Route::middleware(['restrictIp'])->namespace("Customer")->prefix('customer')->group(function() {
	Route::get('/', 'HomeController@index')->name('customer.home');
	Route::namespace('Auth')->group(function() {
		Route::get('/register', 'RegisterController@showRegisterForm')->name('customer.register');
		Route::post('/register', 'RegisterController@createMerchent')->name('customer.register');
		Route::post('/profile/update', 'RegisterController@update')->name('customer.profile.update');
		Route::get('/login', 'LoginController@showLoginForm')->name('customer.login');
		Route::post('/login', 'LoginController@login');
		Route::post('logout', 'LoginController@logout')->name('customer.logout');
	});
});

