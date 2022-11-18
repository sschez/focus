<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sesion;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class SesionApi extends Controller
{
    public function all(Request $request)
    {   
        $dataApi = [];
        $id = $request->input('id');
        $usuario = Sesion::findOrFail((int)$id);
        $dataApi['data'] = json_encode($usuario);
        $dataApi['additionalData'] = json_encode([ 'empresa' => 'EAFIT', 'linkEmpresa' => 'http://127.0.0.1:8000/']);;
        return json_encode($dataApi);
    }
}
