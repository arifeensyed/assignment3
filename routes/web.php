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


Route::get('index', 'ProductController@index');
Route::get('show/{id}', 'ProductController@show');
Route::get('delete/{id}', 'ProductController@destroy');
Route::get('count', 'ProductController@count');

Route::get('name/{name}', 'ProductController@findByName');
Route::get('first', 'ProductController@first');
Route::get('average', 'ProductController@average');
Route::get('max', 'ProductController@maxQuantity');
Route::get('pluck', 'ProductController@pluck');
Route::get('take', 'ProductController@take');
Route::get('distinct', 'ProductController@distinct');
Route::get('orderby/{property}', 'ProductController@orderBy');
Route::get('like/{name}', 'ProductController@like');
