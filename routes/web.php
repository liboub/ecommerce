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


Route::get('/cart', 'CartController@index');
Route::post('/cartStore', 'CartController@store')->name('cartStore');
Route::get('/cartRemove/{n}', 'CartController@destroy')->name('cartDelete');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/shop', 'ShopController@view');

Route::get('/accueil', 'AccueilController@view');
Route::get('/', 'AccueilController@view');


Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');


Route::get('/checkout', function () {
    return view('pages.checkout');
});