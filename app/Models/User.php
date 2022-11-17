<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the user name
     * $this->attributes['typedoc'] - string - ccontains the type od document
     * $this->attributes['document'] - int - contains the user document
     * $this->attributes['namedoc'] - string - 
     * $this->attributes['namem'] - string - contains the emergency name
     * $this->attributes['numem'] - int - contains the emerency number
     */
    protected $fillable = ['name', 'typedoc', 'document', 'namem', 'numem'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getTypedoc()
    {
        return $this->attributes['typedoc'];
    }

    public function setTypedoc($typedoc)
    {
        $this->attributes['typedoc'] = $typedoc;
    }

    public function getDocument()
    {
        return $this->attributes['document'];
    }

    public function setDocument($document)
    {
        $this->attributes['document'] = $document;
    }


    public function getNameem()
    {
        return $this->attributes['nameem'];
    }

    public function setNameem($nameem)
    {
        $this->attributes['nameem'] = $nameem;
    }

    public function getNumem()
    {
        return $this->attributes['numem'];
    }

    public function setNumem($numem)
    {
        $this->attributes['numem'] = $numem;
    }

    public function Therapy()
    {
        return $this->hasMany(Therapy::class);
    }

    public function getTherapy()
    {
        return $this->therapy;
    }

    public function setTherapy($therapy)
    {
        $this->therapy = $therapy;
    }
}
