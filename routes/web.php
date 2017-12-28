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

Route::get('catalog/{id}','ProductController@getCatalog');

Route::get('/product/{id}', 'ProductController@getOne');
Route::get('/','Basecontroller@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('cart');
Route::get('{id}','Basecontroller@getStatic');