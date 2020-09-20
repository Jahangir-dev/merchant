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

Route::prefix('web')->group(function() {

    Route::get('/', 'WebController@index')->name('web.index');
    Route::get('/register', 'RegisterController@index')->name('web.register');
    Route::get('/forgot-password', 'RegisterController@forgot')->name('web.forgot-password');

//    Brands Route
    Route::get('/brand/{slug}','BrandController@show')->name('web.brand.show');

//    Category
    Route::get('/category/{slug}','CategoryController@show')->name('web.category.show');

//    Product
    Route::get('/product/{slug}','ProductController@show')->name('web.product.show');

});
