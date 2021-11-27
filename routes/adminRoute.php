<?php
use Mafftor\LaravelFileManager\Lfm;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'admin']], function () {
    Lfm::routes();
});

Route::group(['prefix' => 'admin','namespace' => 'Backend','as'=>'admin.'], function () {
    // Login Route
    Route::get('/ecommerce/login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('/ecommerce/login/submit','Auth\LoginController@login')->name('login.submit');
    // Logout Route
    Route::post('/ecommerce/logout/submit','Auth\LoginController@logout')->name('logout.submit');
    // Forget Password Routes
    // Route::get('/ecommerce/password/reset','Auth\ForgetPasswordController@showLinkRequestform')->name('password.request');
    // Route::post('/ecommerce/password/reset/submit','Auth\ForgetPasswordController@reset')->name('password.reset.submit');
});

Route::group(['prefix' => 'admin','namespace' => 'Backend','as'=>'admin.','middleware' => ['admin']], function () {
    Route::get('/dashboard','DashboardContrller@dashboard')->name('dashboard');

    // categories route
    Route::get('/category','Category\CategoryController@index')->name('categories.index');
    Route::post('/category/store','Category\CategoryController@store')->name('categories.store');
    Route::get('/category/delete/{id}','Category\CategoryController@distroy')->name('categories.distroy');


    //sub categories route
    Route::get('/category/subcategory','Category\CategoryController@subCategoryIndex')->name('categories.subcategory.index');
    Route::post('/category/subcategory/store','Category\CategoryController@subCategoryStore')->name('categories.subcategory.store');
    Route::get('/category/subcategory/delete/{id}','Category\CategoryController@subCategorydistroy')->name('categories.subcategory.distroy');

    //Brand route
    Route::get('/barand/index','Brand\BrandController@index')->name('brand.index');
    Route::post('/brand/store','Brand\BrandController@store')->name('brand.store');
    Route::get('/brand/delete/{id}','Brand\BrandController@distroy')->name('brand.distroy');
    Route::post('/brand/brand_update/{brand_id}','Brand\BrandController@updateBrand')->name('brand.brand_update');
    Route::get('/brand/edit/{id}','Brand\BrandController@edit')->name('brand.edit');

    //Brand Model route
    Route::get('/brandModel/index','Brand\BrandController@brandModel_index')->name('brandModel.index');
    Route::post('/brandModel/store','Brand\BrandController@brandModel_store')->name('brandModel.store');
    Route::get('/brandModel/delete/{id}','Brand\BrandController@brandModel_distroy')->name('brandModel.distroy');
    Route::post('/brandModel/brandModel_update/{brand_id}','Brand\BrandController@brandModel_update')->name('brandModel.brandModel_update');
    Route::get('/brandModel/edit/{id}','Brand\BrandController@brandModel_edit')->name('brandModel.edit');
    Route::get('/get/brand/submodel/{id}','Brand\BrandController@getSubModel')->name('brand.get.submodel');

    //Brand Model Year route
    Route::get('/brandModelYear/index','Brand\BrandController@brandModelYear_index')->name('brandModelYear.index');
    Route::post('/brandModelYear/store','Brand\BrandController@brandModelYear_store')->name('brandModelYear.store');
    Route::get('/brandModelYear/delete/{id}','Brand\BrandController@brandModelYear_distroy')->name('brandModelYear.distroy');
    Route::post('/brandModelYear/brandModelYear_update/{brand_id}','Brand\BrandController@brandModelYear_update')->name('brandModelYear.brandModelYear_update');
    Route::get('/brandModelYear/edit/{id}','Brand\BrandController@brandModelYear_edit')->name('brandModelYear.edit');
    //Route::get('/get/brand/submodel/{id}','Brand\BrandController@getSubModel')->name('brand.get.submodel');
    Route::get('/get/brand/submodelyear/{id}','Brand\BrandController@getSubModelYear')->name('brand.get.submodelyear');




    //Manufactures route
    Route::get('/manufactures/index','ManufacturesController@index')->name('manufactures.index');
    Route::post('/manufactures/store','ManufacturesController@store')->name('manufactures.store');
    Route::get('/manufactures/delete/{id}','ManufacturesController@destroy')->name('manufactures.destroy');
    Route::post('/manufactures/update/{id}','ManufacturesController@UpdateManufacture')->name('manufactures.update');
    Route::get('/manufactures/edit/{id}','ManufacturesController@edit')->name('manufactures.edit');

     //Slider route
     Route::get('/slider/index','Slider\SliderController@index')->name('slider.index');
     Route::post('/slider/store','Slider\SliderController@store')->name('slider.store');
     Route::post('/slider/update/{id}','Slider\SliderController@update')->name('slider.update');
     Route::get('/slider/delete/{id}','Slider\SliderController@destroy')->name('slider.destroy');


     //Banner route
     Route::get('/banner/index','Banner\BannerController@index')->name('banner.index');
     Route::post('/banner/store','Banner\BannerController@store')->name('banner.store');
     Route::get('/banner/edit/{id}','Banner\BannerController@edit')->name('banner.edit');
     Route::post('/banner/update/{id}','Banner\BannerController@update')->name('banner.update');
     Route::get('/banner/delete/{id}','Banner\BannerController@destroy')->name('banner.destroy');

    //Product route
    Route::get('/product/index','Product\ProductController@index')->name('product.index');
    Route::get('/product/list','Product\ProductController@list')->name('product.list');
    Route::get('/get/product/subcategory/{id}','Product\ProductController@getSubCategory')->name('categories.get.subcategory');
    Route::post('/product/store','Product\ProductController@store')->name('product.store');
    Route::post('/product/update/{product_id}','Product\ProductController@update')->name('product.update');

    Route::get('/product/delete/{product_id}','Product\ProductController@destroy')->name('product.delete');
    Route::get('/product/delete/image/{image_id}','Product\ProductController@imageDelete')->name('product.image.delete');

    Route::get('/product/edit/{product_id}','Product\ProductController@edit')->name('product.edit');
    Route::get('/product/view/{product_id}','Product\ProductController@show')->name('product.view');

    Route::get('/product/category/{category_id}','Product\ProductController@filterByCategory')->name('product.category');


    //Product Attribute route
    Route::get('/product/attribute','Product\AttributeController@index')->name('product.attribute');
    Route::post('/product/attribute/store','Product\AttributeController@store')->name('product.attribute.store');
    Route::get('/attribute/delete/{id}','Product\AttributeController@deleteAttribute')->name('product.attribute.delete');


    Route::get('/product/attribute/configure/{id}','Product\AttributeController@configure')->name('product.attribute.configure');
    Route::post('/product/attribute/configure/store/{attributeId}','Product\AttributeController@configureStore')->name('product.attribute.configure.store');
    Route::get('/configure/attribute/delete/{id}','Product\AttributeController@configureDelete')->name('product.attribute.configure.delete');

    Route::get('/product/attribute/configure/1','Product\AttributeController@size')->name('product.attribute.configure.size');
    Route::get('/product/attribute/configure/2','Product\AttributeController@color')->name('product.attribute.configure.color');


    //Frontend Settings
    Route::get('/settings/frontend-settings/social-settings','Settings\SocialSettingsController@index')->name('settings.frontend-settings.social-settings');
    Route::post('/settings/frontend-settings/social-update','Settings\SocialSettingsController@update')->name('settings.frontend-settings.social-update');

    //Admin Profile Routes
    Route::get('/profile','Profile\AdminProfileController@index')->name('profile');
    Route::post('/profile/update/{admin_id}','Profile\AdminProfileController@update')->name('profile.update');

    //Product Coupon code
    Route::get('/product/coupon','Coupon\CouponController@index')->name('coupon.index');
    Route::post('/coupon/store','Coupon\CouponController@store')->name('coupon.store');
    Route::get('/coupon/delete/{id}','Coupon\CouponController@destroy')->name('coupon.destroy');
    Route::post('/coupon/coupon_update/{coupon_id}','Coupon\CouponController@updateCoupon')->name('coupon.coupon_update');
    Route::get('/coupon/edit/{id}','Coupon\CouponController@edit')->name('coupon.edit');

    // Currency code
    Route::get('/product/currency','Coupon\CouponController@currencyIndex')->name('currency.index');
    Route::post('/currency/store','Coupon\CouponController@store')->name('currency.store');
    Route::get('/currency/delete/{id}','Coupon\CouponController@destroy')->name('currency.destroy');
    Route::post('/currency/currency_update','Coupon\CouponController@updateCurrency')->name('currency.currency_update');
    Route::get('/currency/edit/{id}','Coupon\CouponController@edit')->name('currency.edit');

    Route::get('/currency/selected_currency_update/{currency}','Coupon\CouponController@updateSelectedCurrency')->name('currency.selected_currency_update');

    Route::get('/currency/selected_language_update/{language}','Coupon\CouponController@updateSelectedLanguage')->name('currency.selected_language_update');


    //Orders
    Route::get('/order/list','Order\OrderController@index')->name('order.list');
    Route::get('/order/edit/{order_id}','Order\OrderController@edit')->name('order.edit');
    Route::get('/order/view/{order_id}','Order\OrderController@show')->name('order.view');
    Route::get('/order/delete/{order_id}','Order\OrderController@destroy')->name('order.delete');

    Route::get('/order/updateOrderStatus/{id}','Order\OrderController@statusChange')->name('order.statusChange');


    //Orders
    Route::get('/user/list','User\UserController@index')->name('user.list');
//    Route::get('/order/edit/{order_id}','Order\OrderController@edit')->name('order.edit');
//    Route::get('/order/view/{order_id}','Order\OrderController@show')->name('order.view');
    Route::get('/user/delete/{id}','User\UserController@destroy')->name('user.destroy');
//    Route::get('/order/updateOrderStatus/{id}','Order\OrderController@statusChange')->name('order.statusChange');


    //Software  route
    Route::get('/software','Product\SoftwareProductController@index')->name('software.index');
    Route::post('/software/store','Product\SoftwareProductController@store')->name('software.store');
    Route::get('/software/delete/{id}','Product\SoftwareProductController@distroy')->name('software.distroy');

    //Software Product route
    Route::get('/software-product','Product\SoftwareProductController@software_product_index')->name('softwareProduct.index');

    Route::get('/software-product/list','Product\SoftwareProductController@list')->name('softwareProduct.list');

//    Route::get('/get/software-product/subcategory/{id}','Product\ProductController@getSubCategory')->name('categories.get.subcategory');
//    Route::post('/software-product/update/{software_product_id}','Product\ProductController@update')->name('product.update');
//
//    Route::get('/software-product/delete/{software_product_id}','Product\ProductController@destroy')->name('product.delete');
//    Route::get('/software-product/delete/image/{image_id}','Product\ProductController@imageDelete')->name('product.image.delete');
//
//    Route::get('/software-product/edit/{software_product_id}','Product\ProductController@edit')->name('product.edit');
//    Route::get('/software-product/view/{software_product_id}','Product\ProductController@show')->name('product.view');
//
//    Route::get('/software-product/category/{category_id}','Product\ProductController@filterByCategory')->name('product.category');



});

