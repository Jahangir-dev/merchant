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

    //cart routes
    Route::post('/addToCart', 'ShoppingController@addToCart')->name('checkout.cart');
    Route::post('/getCartItems', 'ShoppingController@getCartItems')->name('get.cart.items');
    Route::post('/getCartItemDiscounted', 'ShoppingController@getCartItemDiscounted')->name('get.cart.items.discounted');
    Route::post('/decrementCartItem', 'ShoppingController@decrementCartItem')->name('decrement.cart.items');
    Route::post('/incrementCartItem', 'ShoppingController@incrementCartItem')->name('increment.cart.items');
    Route::post('/cartItemDelete', 'ShoppingController@cartItemDelete')->name('delete.cart.items');
    Route::get('/cart', 'ShoppingController@getCart')->name('checkout.cart');
    Route::get('/cart/item/{id}/remove', 'ShoppingController@removeItem')->name('checkout.cart.remove');
    Route::get('/cart/clear', 'ShoppingController@clearCart')->name('checkout.cart.clear');

    Route::get('/checkout','ShoppingController@index')->name('customer.checkout.index');
    Route::post('/checkPromo','ShoppingController@checkPromo')->name('customer.check.promo');

    Route::get('/order','ShoppingController@proceedToOrder')->name('customer.order');
    Route::post('/order','ShoppingController@saveOrderDetails')->name('customer.order.details');

    Route::post('/addToWishList','ShoppingController@addToWishList')->name('add.to.wishlist');
    Route::post('/getWishList','ShoppingController@getWishList')->name('get.wishlist');

    Route::get('/wish-list-items', 'CustomerController@wishListItem')->name('wish-list-items');

   
    Route::post('/checkout/order', 'CheckoutController@placeOrder')->name('checkout.place.order');

    Route::get('checkout/payment/complete', 'CheckoutController@complete')->name('checkout.payment.complete');

    Route::get('account/orders', 'AccountController@getOrders')->name('account.orders');


});





//checkout


/*Customers Routes*/
/*Route::middleware(['restrictIp'])->prefix('customer')->group(function() {
	Route::get('/edit', 'HomeController@customer')->name('customer.edit');

	Route::namespace('Auth')->group(function() {
		Route::post('/profile/update', 'RegisterController@update')->name('customer.profile.update');
    });
});*/
