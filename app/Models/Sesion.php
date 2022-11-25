<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;

    protected $fillable = ['dolor', 'caida', 'numSesion'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDolor()
    {
        return $this->attributes['dolor'];
    }

    public function setDolor($dolor)
    {
        $this->attributes['dolor'] = $dolor;
    }

    public function getCaida()
    {
        return $this->attributes['caida'];
    }

    public function setCaida($caida)
    {
        $this->attributes['caida'] = $caida;
    }

    public function getNumSesion()
    {
        return $this->attributes['numSesion'];
    }

    public function setNumSesion($numSesion)
    {
        $this->attributes['numSesion'] = $numSesion;
    }

    public function getRepRealizadas()
    {
        return $this->attributes['repRealizadas'];
    }

    public function setRepRealizadas($repRealizadas)
    {
        $this->attributes['repRealizadas'] = $repRealizadas;
    }

    public function getExtensionMax()
    {
        return $this->attributes['extensionMax'];
    }

    public function setExtensionMax($extensionMax)
    {
        $this->attributes['extensionMax'] = $extensionMax;
    }

    public function getRangos()
    {
        return $this->attributes['rangos'];
    }

    public function setRangos($rangos)
    {
        $this->attributes['rangos'] = $rangos;
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

    //----------------------------------------------------
    public function terapia()
    {
        return $this->belongsTo(Terapia::class);
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
