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

Route::get('/', 'BikeController@index')->name('/');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('create_bike', 'BikeController@create')->name('create_bike');

Route::post('create_bike', 'BikeController@store')->name('create_bike');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
