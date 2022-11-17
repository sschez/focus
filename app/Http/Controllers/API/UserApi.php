<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PacieteApi extends Controller
{
    public function view(Request $request)
    {
        return new UserCollection(User::findOrFail($request->input('id')));
    }
}
