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
Route::get('/interests', 'InterestController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/categories/{id}', 'CategoryController@showProducts');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/products', 'ProductController@index');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::delete('/products/{id}', 'ProductController@destroy');
Route::post('/products', 'ProductController@store');
Route::put('/products', 'ProductController@update');
Route::post('logout', function (){
Auth::logout();
return redirect('/');
});
