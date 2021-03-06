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
    return redirect() -> route("home");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cars', 'CarController@index')->name ('cars.index');


Route::get('/cars/{id}', 'CarController@show')->name ('car.show') -> middleware('auth');

Route::get('/cars/{id}/delete', 'CarController@destroy')->name ('car.destroy') -> middleware('auth');
