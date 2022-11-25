<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Terapia;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class UserApi extends Controller
{
    public function all(Request $request)
    {   
        $dataApi = [];
        $id = $request->input('id');
        $usuario = User::where('document', '=', $id)->find(1);
        $dataApi['data'] = json_encode($usuario);
        $dataApi['additionalData'] = json_encode([ 'empresa' => 'EAFIT', 'linkEmpresa' => 'http://127.0.0.1:8000/user/all']);;
        return json_encode($dataApi);
    }

    public function terapias(Request $request)
    {
        $dataApi = [];
        $id = $request->input('id');
        $usuario = User::findOrFail($id);
        $ejercicios = json_decode($usuario->getTerapia()->getEjercicio());
        $dataApi['data'] = json_encode(["id" => $usuario->getTerapia()->getId(), "ejercicios" => $ejercicios->ejs]);
        $dataApi['additionalData'] = json_encode([ 'empresa' => 'EAFIT', 'linkEmpresa' => 'http://127.0.0.1:8000/user/terapias']);
        return json_encode($dataApi);
    }
}
