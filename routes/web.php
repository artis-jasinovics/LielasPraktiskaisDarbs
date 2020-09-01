<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('cars', 'CarController');

Route::resource('owners', 'UserController');

Route::resource('reviews', 'ReviewController');

Route::resource('rents', 'RentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('reviews/create/{id}', 'ReviewController@create');
