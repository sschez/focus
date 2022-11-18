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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/user/search', 'App\Http\Controllers\UserController@search')->name("user.search");;
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/user/save', 'App\Http\Controllers\UserController@save')->name('user.save');
Route::delete('/user/{id}/delete', 'App\Http\Controllers\UserController@destroy')->name("user.destroy");
Route::get('/user/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');
Route::get('/terapia', 'App\Http\Controllers\TerapiaController@index')->name('terapia.index');
Route::get('/terapia/search', 'App\Http\Controllers\TerapiaController@search')->name("terapia.search");;
Route::get('/terapia/create', 'App\Http\Controllers\TerapiaController@create')->name('terapia.create');
Route::post('/terapia/save', 'App\Http\Controllers\TerapiaController@save')->name('terapia.save');
Route::delete('/terapia/{id}/delete', 'App\Http\Controllers\TerapiaController@destroy')->name("terapia.destroy");
Route::get('/terapia/{id}', 'App\Http\Controllers\TerapiaController@show')->name('terapia.show');
Route::get('/sesion', 'App\Http\Controllers\SesionController@index')->name('sesion.index');
Route::get('/sesion/search', 'App\Http\Controllers\SesionController@search')->name("sesion.search");;
Route::get('/sesion/create', 'App\Http\Controllers\SesionController@create')->name('sesion.create');
Route::post('/sesion/save', 'App\Http\Controllers\SesionController@save')->name('sesion.save');
Route::delete('/sesion/{id}/delete', 'App\Http\Controllers\SesionController@destroy')->name("sesion.destroy");
Route::get('/sesion/{id}', 'App\Http\Controllers\SesionController@show')->name('sesion.show');
