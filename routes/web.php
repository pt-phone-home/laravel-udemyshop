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

Route::get('/test', function(){
    return view('test');
});

Route::get('/', 'PagesController@index')->name('index');


Route::get('/products/index', 'ProductsController@index')->name('products.index');
Route::get('/product/show/{id}', 'ProductsController@show')->name('product.show');
Route::get('/product/create', 'ProductsController@create')->name('product.create');
Route::post('product/store', 'ProductsController@store')->name('product.store');
Route::get('product/edit/{id}', 'ProductsController@edit')->name('product.edit');
Route::put('/product/update/{id}', 'ProductsController@update')->name('product.update');


Route::post('/cart/add', 'ShoppingController@add_to_cart')->name('cart.add');
Route::get('/cart', 'ShoppingController@cart')->name('cart');
Route::get('/cart/delete/{id}', 'ShoppingController@cart_delete')->name('cart.delete');

Route::get('/cart/checkout', 'CheckoutController@index')->name('cart.checkout');
Route::post('/cart/checkout', 'CheckoutController@pay')->name('cart.checkout');

Route::get('/tours', 'PagesController@tours')->name('tours');

Route::get('/tours/irelands_eye', 'PagesController@eye')->name('tours.eye');
Route::get('/tours/cliffs_cruise', 'PagesController@cliffs')->name('tours.cliffs');
Route::get('/tours/fishing_trips', 'PagesController@fishing')->name('tours.fishing');