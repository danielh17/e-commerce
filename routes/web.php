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

Route::middleware('auth')->group(function()
{
  Route::get('/products/create', 'ProductController@create');
  Route::post('/products', 'ProductController@store');
  Route::delete('/products/{id}', 'ProductController@destroy');
  Route::get('/products/{id}/edit', 'ProductController@edit');
});

//Route::resource('/products', 'ProductController')->except(['create', 'destroy', 'edit']);
Route::get('/', 'CategoryController@index');
Route::get('/interests', 'InterestController@index');
Route::post('/products/{id}', 'ProductController@update');
Route::get('/categories/{id}', 'CategoryController@showProducts');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/products', 'ProductController@index');
Route::post('/products/{id}', 'InterestController@show');
Route::post('logout', function (){
  Auth::logout();
  return redirect('/');
  });

//Route::get('/route-cache', function() {
  //$exitCode = Artisan::call('route:cache');
  //return 'Routes cache cleared';
//});
