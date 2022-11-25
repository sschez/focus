<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Terapia extends Model
{
    use HasFactory;

    protected $fillable = ['doctor', 'condicionMedica', 'numSesiones', 'ejercicio', 'user_id'];
    public static function validate(Request $request)
    {
        $rules= [
            "doctor" =>       "required",
            "condicionMedica" =>   "required",
            "numSesiones" =>    "required",            
            "ejercicio" =>     "required",
            "user_id" =>      "required"
        ];

        $request->validate($rules);
    }
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getNumSesiones()
    {
        return $this->attributes['numSesiones'];
    }

    public function setNumSesiones($numSesiones)
    {
        $this->attributes['numSesiones'] = $numSesiones;
    }

    public function getDoctor()
    {
        return $this->attributes['doctor'];
    }

    public function setDoctor($doctor)
    {
        $this->attributes['doctor'] = $doctor;
    }

    public function getCondicionMedica()
    {
        return $this->attributes['condicionMedica'];
    }

    public function setCondicionMedica($condicionMedica)
    {
        $this->attributes['condicionMedica'] = $condicionMedica;
    }

    public function getEjercicio()
    {
        return $this->attributes['ejercicio'];
    }

    public function setEjercicio($ejercicio)
    {
        $this->attributes['ejercicio'] = $ejercicio;
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    
    //--------------------------------------------------------
    public function sesion()
    {
        return $this->hasMany(Sesion::class);
    }

    public function getSesion()
    {
        return $this->sesion;
    }

    public function setSesion($sesion)
    {
        $this->sesion = $sesion;
    }
}
