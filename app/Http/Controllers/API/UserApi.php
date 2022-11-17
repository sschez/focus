<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductCollection;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class UserApi extends Controller
{
    public function view(Request $request)
    {
        return User::findOrFail($request->input('id'));
    }
}
