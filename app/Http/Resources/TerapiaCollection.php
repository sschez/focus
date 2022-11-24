<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SesionCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'additionalData' => "[ 'empresa' => 'EAFIT', 'linkEmpresa' => 'http://127.0.0.1:8000/paciente']",
        ];
    }
}