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
        $dataApi['additionalData'] = json_encode([ 'empresa' => 'EAFIT', 'linkEmpresa' => 'http://127.0.0.1:8000/paciente']);;
        return json_encode($dataApi);
    }

    public function terapias(Request $request)
    {
        $dataApi = [];
        $id = $request->input('id');
        $usuario = User::findOrFail($id);
        $terapias = [];
        foreach ($usuario->getTerapias() as $terapia){
            $terapias[$terapia->getId()] = $terapia->getEjercicio();
        }
        $dataApi['data'] = json_encode($terapias);
        $dataApi['additionalData'] = json_encode([ 'empresa' => 'EAFIT', 'linkEmpresa' => 'http://127.0.0.1:8000/paciente']);
        return json_encode($dataApi);
    }
}
