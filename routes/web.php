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
Route::redirect('/welcome', '/');
Route::view('/about', 'about')->name('about');
//weather
Route::view('/weather', 'weather')->name('weather');
Route::get('/weather', 'WeatherController@showWeather')->name('weather');

//contacts delete
Route::view('/contacts', 'contacts')->name('contacts');
Route::post('/contacts/submit', 'ContactsController@submit')->name('contactForm') ;

// view order list
Route::get('/order', 'OrderController@viewDataAll')->name('order');

// view order instance
Route::get('/order/{key}', 'OrderController@edit')->name('edit');

// edit order instance
Route::get('/order/{key}/edit', 'OrderController@editOrder')->name('editOrder');

// redirects
Route::redirect('/order/order', '/order');
