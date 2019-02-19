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
Route::get('/', 'HomeController@index')->name('index');

Route::resource('/cart', 'cartController', ['names' => [
    'index' 	=> 'cart.index', 
    'store' 	=> 'cart.store', 
    'update' 	=> 'cart.update',
    'destroy' 	=> 'cart.destroy',
]]);

// Route::get('/', 'exampleController@example')->name('example');
Route::post('/', 'exampleController@exampleStore')->name('example.store');

// PRODUCTS
Route::get('products', 'productsController@index')->name('products.index');
Route::get('/products/{id}', 'productsController@show')->name('products.show');
// Route::get('/products/{id}', 'HomeController@show')->name('home.show');
