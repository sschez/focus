<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Terapia;

class Paciente extends Model
{
    use HasFactory;

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getNombresApellidos()
    {
        return $this->attributes['nombresApellidos'];
    }

    public function setNombresApellidos($nombresApellidos)
    {
        $this->attributes['nombresApellidos'] = $nombresApellidos;
    }

    public function getTipoID()
    {
        return $this->attributes['tipoID'];
    }

    public function setTipoID($tipoID)
    {
        $this->attributes['tipoID'] = $tipoID;
    }

    public function getNumeroID()
    {
        return $this->attributes['numeroID'];
    }
    
    public function setNumeroID($numeroID)
    {
        $this->attributes['numeroID'] = $numeroID;
    }
    
    public function getNumEmergencia()
    {
        return $this->attributes['numEmergencia'];
    }
    
    public function setNumEmergencia($numEmergencia)
    {
        $this->attributes['numEmergencia'] = $numEmergencia;
    }

    public function getNombreEmergencia()
    {
        return $this->attributes['nombreEmergencia'];
    }
    
    public function setNombreEmergencia($nombreEmergencia)
    {
        $this->attributes['nombreEmergencia'] = $nombreEmergencia;
    }

    public function getCreated_at()
    {
        return $this->attributes['created_at'];
    }

    public function setCreated_at($created_at)
    {
        $this->attributes['created_at'] = $created_at;
    }

    public function getUpdated_at()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdated_at($updated_at)
    {
        $this->attributes['updated_at'] = $updated_at;
    }

    //--------------------------------------------------------
    public function terapia()
    {
        return $this->hasMany(Terapia::class);
    }

    public function getTerapia()
    {
        return $this->terapia;
    }

    public function setTerapia($terapia)
    {
        $this->terapia = $terapia;
    }
}
