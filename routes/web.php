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

Route::get('/', 'ProductController@home');



Route::middleware(['auth'])->group(function()
{
  Route::get('/products/admin', 'ProductController@admin');
  Route::get('/products/show/{product}', 'ProductController@showByAdmin');
  Route::resource('products', 'ProductController')->except('show', 'index', 'home');

  Route::post('/carts', 'CartController@store');
  Route::delete('/carts/{product}', 'CartController@destroy');
  Route::put('/carts/{product}', 'CartController@update');
  Route::get('/carts', 'CartController@index');

  Route::post('/orders', 'OrderController@store');
  Route::get('/orders', 'OrderController@index');

});

Route::get('/products', 'ProductController@index');
Route::get('/products/{product}', 'ProductController@show');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
