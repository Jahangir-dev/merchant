<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');


    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/','Admin\HomeController@index')->name('admin.home');
        Route::post('/setTarget', 'Admin\HomeController@setTarget');

        Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
        Route::post('/settingsU', 'Admin\SettingController@update')->name('admin.settings.update');

        Route::group(['prefix'  =>   'categories'], function() {

            Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
            Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
            Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
            Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');

        });

        Route::group(['prefix'  =>   'attributes'], function() {

            Route::get('/', 'Admin\AttributeController@index')->name('admin.attributes.index');
            Route::get('/create', 'Admin\AttributeController@create')->name('admin.attributes.create');
            Route::post('/store', 'Admin\AttributeController@store')->name('admin.attributes.store');
            Route::get('/{id}/edit', 'Admin\AttributeController@edit')->name('admin.attributes.edit');
            Route::post('/update', 'Admin\AttributeController@update')->name('admin.attributes.update');
            Route::get('/{id}/delete', 'Admin\AttributeController@delete')->name('admin.attributes.delete');

            Route::post('/get-values', 'Admin\AttributeValueController@getValues');
            Route::post('/add-values', 'Admin\AttributeValueController@addValues');
            Route::post('/update-values', 'Admin\AttributeValueController@updateValues');
            Route::post('/delete-values', 'Admin\AttributeValueController@deleteValues');
        });

        Route::group(['prefix'  =>   'brands'], function() {

            Route::get('/', 'Admin\BrandController@index')->name('admin.brands.index');
            Route::get('/create', 'Admin\BrandController@create')->name('admin.brands.create');
            Route::post('/store', 'Admin\BrandController@store')->name('admin.brands.store');
            Route::get('/{id}/edit', 'Admin\BrandController@edit')->name('admin.brands.edit');
            Route::post('/update', 'Admin\BrandController@update')->name('admin.brands.update');
            Route::get('/{id}/delete', 'Admin\BrandController@delete')->name('admin.brands.delete');

        });

        Route::group(['prefix' => 'products'], function () {

           Route::get('/', 'Admin\ProductController@index')->name('admin.products.index');
           Route::get('/create', 'Admin\ProductController@create')->name('admin.products.create');
           Route::post('/store', 'Admin\ProductController@store')->name('admin.products.store');
           Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('admin.products.edit');
           Route::post('/update', 'Admin\ProductController@update')->name('admin.products.update');

           Route::post('images/upload', 'Admin\ProductImageController@upload')->name('admin.products.images.upload');
           Route::get('images/{id}/delete', 'Admin\ProductImageController@delete')->name('admin.products.images.delete');

           Route::get('attributes/load', 'Admin\ProductAttributeController@loadAttributes');
           Route::post('attributes', 'Admin\ProductAttributeController@productAttributes');
           Route::post('attributes/values', 'Admin\ProductAttributeController@loadValues');
           Route::post('attributes/add', 'Admin\ProductAttributeController@addAttribute');
           Route::post('attributes/delete', 'Admin\ProductAttributeController@deleteAttribute');

        });

        Route::group(['prefix' => '/orders'], function () {
           Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
           Route::get('/show/{order}', 'Admin\OrderController@show')->name('admin.orders.show');
        });

        Route::get('/profile', 'Admin\HomeController@myProfile')->name('admin.profile');

  Route::post('/myprofile/update/{id}', 'Admin\HomeController@updateProfile')->name('admin.myprofile.update');

  Route::get('/ip', 'Admin\IPAddressController@index')->name('admin.ip');
  Route::get('/ip/delete/{id}', 'Admin\IPAddressController@destroy')->name('admin.ip.delete');

  Route::get('/user/block/{id}', 'Admin\HomeController@userBlock')->name('admin.user.block');
  Route::get('/user/unblock/{id}', 'Admin\HomeController@userUnBlock')->name('admin.user.unblock');

  Route::get('/user/block/ip/{id}', 'Admin\HomeController@userIpBlock')->name('admin.user.block.ip');
  Route::get('/user/unblock/ip/{id}', 'Admin\HomeController@userIpUnBlock')->name('admin.user.unblock.ip');



  Route::get('/merchants', 'Admin\HomeController@merchantsList')->name('admin.merchants.list');
  Route::get('/merchants/edit/{id}', 'Admin\HomeController@edit')->name('admin.merchants.edit');
  Route::get('/merchants/delete/{id}', 'Admin\HomeController@delete')->name('admin.merchants.delete');

  Route::get('/customers', 'Admin\HomeController@customersList')->name('admin.customers.list');
  Route::get('/customers/delete/{id}', 'Admin\HomeController@delete')->name('admin.customers.delete');
  Route::get('/customers/edit/{id}', 'Admin\HomeController@edit')->name('admin.customers.edit');

  Route::post('/profile/update/{id}', 'Admin\HomeController@updateUser')->name('admin.profile.update');


    Route::get('/deal', 'Admin\DealsController@index')->name('admin.deal');
    Route::get('/deal/create', 'Admin\DealsController@create')->name('admin.deal.create');
    Route::post('/deal/create', 'Admin\DealsController@store')->name('admin.deal.save');
    });


    Route::get('send-mails', 'Admin\MailChimpController@store')->name('subscribe-newsletter');
    Route::get('check-subscribe', 'Admin\MailChimpController@checkSubscribed')->name('subscribe-check');

    Route::resource('/coupon', 'Admin\CouponController');
  Route::post('/coupon/bulk_delete', 'Admin\CouponController@bulk_delete');
  Route::get('dropdown', 'Admin\CouponController@dropdown');
});
