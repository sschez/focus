<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/all', 'App\Http\Controllers\Api\UserApi@all')->name("api.user.all");
Route::post('/user/terapias', 'App\Http\Controllers\Api\UserApi@terapias')->name("api.user.terapias");
Route::post('/sesion/all', 'App\Http\Controllers\Api\SesionApi@all')->name("api.sesion.all");
