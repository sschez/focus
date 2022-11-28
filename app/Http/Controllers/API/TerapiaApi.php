<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Terapia;
use App\Models\Sesion;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;

class TerapiaApi extends Controller
{
    public function sesiones(Request $request)
    {
        $dataApi = [];
        $id = (int)$request->input('id');
        $terapia = Terapia::findOrFail($id);
        $sesiones = Sesion::where('terapia_id', '=', $id)->get();
        $sesiones2 = [];
        foreach ($sesiones as $sesion)
        {
            if (is_null($sesion->getExtensionMax()))
            {
                $sesiones2[] = $sesion;
            }
        }
        $dataApi['data'] = json_encode(["sesiones" => $sesiones2]);
        $dataApi['additionalData'] = json_encode([ 'empresa' => 'EAFIT', 'linkEmpresa' => 'http://127.0.0.1:8000/terapia/sesiones']);
        return json_encode($dataApi);
    }
}
