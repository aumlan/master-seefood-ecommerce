<?php

use App\Http\Controllers\Backend\Coupon\CouponController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/optimize', function() {
    Artisan::call('optimize');
    return '<center><h1>System Optimized!</h1></center>';
});
Route::get('/reboot', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('key:generate');
    Artisan::call('config:cache');
    return '<center><h1>System Rebooted!</h1></center>';
});


Auth::routes();
Route::get('/','Frontend\HomeController@index')->name('welcome');
Route::get('/product/{id}/{slug?}','Frontend\HomeController@productDetails')->name('product.details');


Route::get('/product/add/to/cart/{id}/{qty}/{size}/{color}','Frontend\CartController@AddToCart')->name('product.add.to.cart');

Route::get('/product/add/to/cart/direct/{id}/{qty}/{rowID}','Frontend\CartController@AddToCartDirect')->name('product.add.to.cart.direct');

Route::get('/product/remove/cart/{id}','Frontend\CartController@RemoveToCart')->name('product.remove.to.cart');

Route::get('/product/decrease/to/cart/{id}/{qty}/{rowId}','Frontend\CartController@decreaseToCart')->name('product.decrease.to.cart');

Route::get('/shopping/cart/count','Frontend\CartController@count')->name('product.cart.count');

Route::get('/shopping/cart/list','Frontend\CartController@list')->name('product.cart.list');

Route::get('/shopping/cart/empty','Frontend\CartController@cart_empty')->name('product_cart.empty');

Route::get('/shopping/checkout','Frontend\CartController@checkout')->name('product_cart.checkout');

Route::post('/shopping/placeOrder','Frontend\CartController@placeOrder')->name('place_order');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/order-details/{orderID}', [UserController::class, 'order_details'])->name('user.order.details');

Route::get('/search/model/product/title/{inputText}', [HomeController::class, 'search'])->name('user.search');

Route::get('/search/mobile-search', [HomeController::class, 'search_mobile'])->name('user.search.mobile');

Route::get('/redeem-coupon/{coupon_value}', [UserController::class, 'redeem_coupon'])->name('user.redeem_coupon');

Route::get('/home', [UserController::class, 'dashboard'])->name('user.home');


//Optional Pages

Route::get('/terms-conditions', [HomeController::class, 'terms_conditions'])->name('terms.conditions');
Route::get('/about', [HomeController::class, 'about'])->name('terms.about');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/refund-policy', [HomeController::class, 'refund'])->name('refund');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

Route::get('/currency/selected_currency_update/{currency}',[CouponController::class, 'updateSelectedCurrency'])->name('currency.selected_currency_update');

Route::get('/currency/selected_language_update/{language}',[CouponController::class, 'updateSelectedLanguage'])->name('currency.selected_language_update');


Route::get('/brands/{id}/{slug}', [UserController::class, 'brand_products'])->name('brand.products');

Route::get('/get/brand/submodel/{id}',[ HomeController::class,'getSubModel'])->name('brand.get.submodel');

Route::get('/get/brand/submodelyear/{id}',[ HomeController::class,'getSubModelYear'])->name('brand.get.submodelyear');

Route::get('/search-filter',[ HomeController::class,'search_filter'])->name('search.filter');

Route::get('/category/{id}/{slug}',[ UserController::class,'category_products'])->name('category.products');

Route::get('/manufacturers/{id}/{slug}',[ UserController::class,'manufacturers_products'])->name('manufacturers.products');

Route::get('/pages/search-results-page', [HomeController::class, 'search_enter'])->name('user.search.enter');

Route::get('/software-activation/',[ UserController::class,'software_list'])->name('software.list');

Route::get('/software-activation/{id}/{slug}',[ UserController::class,'software_product_list'])->name('software.product.list');
