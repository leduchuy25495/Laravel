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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',[
	'as'=>'trangchu',
	'uses'=>'PageController@getIndex'
]);	

Route::get('loaisanpham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chitietsanpham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);
Route::get('lienhe',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienhe'
]);
Route::get('timkiem',[
	'as'=>'timkiem',
	'uses'=>'PageController@getTimkiem'
	]);
Route::post('/cart', 'CartController@cart');

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('dathang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('dathang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);