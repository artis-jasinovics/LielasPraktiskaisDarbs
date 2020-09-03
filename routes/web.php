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

Route::resource('reviews', 'ReviewController');

Route::resource('rents', 'RentController');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	
Route::resource('users', 'UsersController', ['except'=> ['show','create','store']]);

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('review/create/{id}', 'ReviewController@create');

Route::get('rents/create/{id}', 'RentController@create');
