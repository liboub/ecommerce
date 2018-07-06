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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/accueil', function () {
    return view('pages.accueil');
});

Route::get('/shop', function () {
    return view('pages.shop');
});

Route::get('/shop/{n}', 'shopController@viewproduct');

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});