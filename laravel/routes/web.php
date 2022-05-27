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

Route::get('/laptop/create','LaptopController@create')->name('laptop.create')->middleware('login');
Route::post('/laptop', 'LaptopController@store')->name('laptop.store')->middleware('login');
Route::get('/laptop', 'LaptopController@data')->name('laptop.data')->middleware('login');
Route::get('/laptop/{laptop}', 'LaptopController@show')->name('laptop.show')->middleware('login');
Route::get('/laptop/{laptop}/edit', 'LaptopController@edit')->name('laptop.edit')->middleware('login');
Route::patch('/laptop/{laptop}', 'LaptopController@update')->name('laptop.update')->middleware('login');
Route::delete('/laptop/{laptop}', 'LaptopController@destroy')->name('laptop.destroy')->middleware('login');

Route::get('/login', 'AdminController@index')->name('login.index');
Route::get('/logout', 'AdminController@logout')->name('login.logout');
Route::post('/login', 'AdminController@process')->name('login.process');