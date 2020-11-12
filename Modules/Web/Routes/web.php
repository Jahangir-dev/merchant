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

    Route::get('contact-us', 'ContactUsController@show')->name('contact');
    Route::post('contact-us', 'ContactUsController@store')->name('contact.us');

    Route::get('/', 'WebController@index')->name('web.index');
    Route::get('/register', 'RegisterController@index')->name('web.register');
    Route::get('/login', 'RegisterController@login')->name('web.login');
    Route::get('/forgot-password', 'RegisterController@forgot')->name('web.forgot-password');
//    Brands Route
    Route::get('/brand/{slug}','BrandController@show')->name('web.brand.show');
//    vendor
    Route::get('/vendor/{id}','BrandController@showVendor')->name('web.vendor.show');
//    Category
    Route::get('/category/{slug}','CategoryController@show')->name('web.category.show');
//    Product
    Route::get('/product/{slug}','ProductController@show')->name('web.product.show');

});
    Route::get('post/{uniID}/{slug}', 'WebController@post_show');

//cart routes
Route::post('/addToCart', 'ShoppingController@addToCart')->name('checkout.AddToCart');
Route::post('/getCartItems', 'ShoppingController@getCartItems')->name('get.cart.items');
Route::post('/decrementCartItem', 'ShoppingController@decrementCartItem')->name('decrement.cart.items');
Route::post('/incrementCartItem', 'ShoppingController@incrementCartItem')->name('increment.cart.items');
Route::post('/cartItemDelete', 'ShoppingController@cartItemDelete')->name('delete.cart.items');
Route::get('/cart', 'ShoppingController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'ShoppingController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Shopping Controller@clearCart')->name('checkout.cart.clear');

//checkout
Route::get('/checkout','ShoppingController@checkout')->name('checkout.index');

Route::get('/checkout/{coupon}','ShoppingController@checkoutCopoun')->name('checkout.coupon');

//wishlist
Route::post('/addToWishList','ShoppingController@addToWishList')->name('add.to.wishlist');
Route::post('/getWishList','ShoppingController@getWishList')->name('get.wishlist');

Route::get('/search', 'SearchController@searchResults')->name('search');

