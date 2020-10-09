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

//    Profile
    Route::get('/profile', 'UserController@index')->name('merchant.profile');
    Route::post('/profile/basic/update', 'UserController@update')->name('merchant.profile.basic.update');
    Route::post('/profile/about/update', 'UserController@updateAbout')->name('merchant.profile.about.update');

//    Deals
    Route::get('/deals', 'DealsController@index')->name('merchant.deals');
    Route::get('/deals/create', 'DealsController@create')->name('merchant.deals.create');
    Route::post('/deals/store', 'DealsController@store')->name('merchant.deals.store');
    Route::get('/deals/edit/{id}', 'DealsController@edit')->name('merchant.deals.edit');
    Route::post('/deals/update/{id}', 'DealsController@update')->name('merchant.deals.update');
    Route::post('/deals/delete', 'DealsController@destroy')->name('merchant.deal.delete');

//    Products
    Route::get('/products', 'ProductController@index')->name('merchant.products');
    Route::get('/products/create', 'ProductController@create')->name('merchant.products.create');
    Route::post('/products/store', 'ProductController@store')->name('merchant.products.store');
    Route::get('/products/edit/{id}', 'ProductController@edit')->name('merchant.products.edit');
    Route::get('/products/delete/{id}', 'ProductController@destroy')->name('merchant.products.delete');
    Route::post('/products/update/{id}', 'ProductController@update')->name('merchant.products.update');
    Route::post('/products/image/update/{id}', 'ProductController@updateImage')->name('merchant.product.image.update');
    Route::get('/product/delete/image/{id}', 'ProductController@deleteImage')->name('merchant.product.delete.image');

//    Route::post('/profile/experience/update', 'UserController@updateAbout')->name('merchant.profile.experience.update');
    Route::post('/profile/media/update', 'UserController@updateMedia')->name('merchant.profile.media.update');

     Route::get('account/orders', 'AccountController@getOrders')->name('account.orders');

});



/*Merchants Routes*/
/*Route::middleware(['restrictIp'])->prefix('merchant')->group(function() {
	Route::get('/edit', 'HomeController@merchant')->name('merchant.edit');

	Route::namespace('Auth')->group(function() {
		Route::post('/profile/update', 'RegisterController@update')->name('merchant.profile.update');
    });
});*/
