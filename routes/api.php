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

<<<<<<< HEAD
Route::post('/userID', 'App\Http\Controllers\Api\UserApi@view')->name("api.user.view");
=======
Route::post('/paciente', 'App\Http\Controllers\Api\PacienteApi@view')->name('api.paciente.view');
>>>>>>> 2db4b1d48f30a07d5f219c26a50642b75bef0b36
