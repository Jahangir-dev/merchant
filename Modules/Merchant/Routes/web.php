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

Route::prefix('merchant')->group(function() {
    Route::get('/', 'MerchantController@index')->name('merchant');
    Route::get('/register', 'RegisterController@index')->name('merchant.register');
    Route::get('/profile', 'UserController@index')->name('merchant.profile');
//    Profile Update
    Route::post('/profile/basic/update', 'UserController@update')->name('merchant.profile.basic.update');
    Route::post('/profile/about/update', 'UserController@updateAbout')->name('merchant.profile.about.update');
//    Route::post('/profile/experience/update', 'UserController@updateAbout')->name('merchant.profile.experience.update');
    Route::post('/profile/media/update', 'UserController@updateMedia')->name('merchant.profile.media.update');
});



/*Merchants Routes*/
/*Route::middleware(['restrictIp'])->prefix('merchant')->group(function() {
	Route::get('/edit', 'HomeController@merchant')->name('merchant.edit');

	Route::namespace('Auth')->group(function() {
		Route::post('/profile/update', 'RegisterController@update')->name('merchant.profile.update');
    });
});*/
