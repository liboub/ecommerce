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

Route::get('/shop', 'ShopController@view');

Route::get('/accueil', 'AccueilController@view');

Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');


Route::get('/cart', function () {
    return view('pages.cart');
});


Route::get('/checkout', function () {
    return view('pages.checkout');
});