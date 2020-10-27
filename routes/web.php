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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('welcome');
//Route::redirect('/welcome', '/');
Route::view('/about', 'about')->name('about');
//weather
//Route::view('/weather', 'weather')->name('weather');
Route::get('/weather', 'WeatherController@showWeather')->name('weather');

// view order instance
Route::get('/orders/{key}', 'OrderController@seeOrder')->name('seeOrder');

// edit order instance
Route::get('/orders/{key}/edit', 'OrderController@editOrder')->name('editOrder');

//orders with paginator
Route::get('/orders', 'OrderController@showAllOrdersPaginator')->name('orders');

// conditions views with paginator
Route::get('/overdue', 'OrderController@overdue')->name('overdue');
Route::get('/current', 'OrderController@current')->name('current');
Route::get('/new', 'OrderController@new_orders')->name('new_orders');
Route::get('/ready', 'OrderController@ready')->name('ready');

