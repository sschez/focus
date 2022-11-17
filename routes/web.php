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
Route::get('/admin/user/search', 'App\Http\Controllers\UserController@search')
->name("user.search");;
Route::get('/user/create', 'App\Http\Controllers\UserController@create')
->name('user.create');
Route::post('/user/save', 'App\Http\Controllers\UserController@save')
->name('user.save');
Route::get('/user/{id}', 'App\Http\Controllers\UserController@show')
->name('user.show');
