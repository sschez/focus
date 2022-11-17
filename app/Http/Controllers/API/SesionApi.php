<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sesion;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class UserApi extends Controller
{
    public function view(Request $request)
    {
        return User::findOrFail($request->input('id'));
    }
}