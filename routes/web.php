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

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('index');

Route::get('/', 'CategoryController@index');
Route::post('/interests', 'InterestController@index');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/categories/{id}', 'CategoryController@showProducts');
Route::get('/create-form', 'ProductController@create');
