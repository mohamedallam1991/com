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

Route::get('/', function () {
    return view('main.landing');
});

Route::get('/login', function() {
    return view('dealer.login');
});

Route::get('/inquiry', function() {
    return view('main.dealer');
});

Route::get('/about', function() {
    return view('main.about');
});

Route::get('/contact', function() {
    return view('main.contact');
});

Route::get('/products', function() {
    return view('products.landing');
});

Route::get('/dealer', function() {
    return view('dealer.landing');
});

Route::get('/dealer/account', function() {
    return view('dealer.account');
});

Route::get('/dealer/orders', function() {
    return view('dealer.orders');
});

Route::get('/dealer/order/{id}', function() {
    return view( 'dealer.order');
});

Route::get('/dealer/tracking', function() {
    return view('dealer.tracking');
});

Route::get('/dealer/cart', function() {
    return view('dealer.cart');
});

Route::get('/locator', function() {
    return view('locator.landing');
});

Route::get('/dsadmin/landing', function() {
    return view('admin.landing');
});

Route::get('/dsadmin/login', function() {
    return view('admin.login');
});

Route::get('/dsadmin/applications', function() {
    return view('admin.applicants');
});

Route::get('/dsadmin/application/{id}', function() {
    return view('admin.application');
});

Route::get('/dsadmin/categories', function() {
    return view('admin.categories');
});

Route::get('/dsadmin/contacts', function() {
    return view('admin.contacts');
});

Route::get('/dsadmin/dealers', function() {
    return view('admin.dealers');
});

Route::get('/dsadmin/dealer/{id}', function() {
    return view('admin.dealer');
});
Route::get('/dsadmin/orders', function() {
    return view('admin.orders');
});

Route::get('/dsadmin/order/{id}', function() {
    return view('admin.order');
});

Route::get('/dsadmin/pricing', function() {
    return view('admin.pricing');
});

Route::get('/dsadmin/products', function() {
    return view('admin.products');
});

Route::get('/dsadmin/product/{id}', function() {
    return view('admin.product');
});

Route::get('/dsadmin/promotions', function() {
    return view('admin.promotions');
});

Route::get('/dsadmin/tracking', function() {
    return view('admin.tracking');
});