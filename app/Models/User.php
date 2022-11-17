<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the user name
     * $this->attributes['typedoc'] - string -
     * $this->attributes['document'] - int -
     * $this->attributes['namedoc'] - string -
     * $this->attributes['namem'] - string -
     * $this->attributes['numem'] - int -
     * $this->attributes['created_at'] - timestamp-
     * $this->attributes['updated_at'] - timestamp -
     */
    protected $fillable = ['name', 'typedoc', 'document', 'namedoc', 'namem', 'numem'];

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

    public function getNamedoc()
    {
        return $this->attributes['namedoc'];
    }

    public function setNamedoc($namedoc)
    {
        $this->attributes['namedoc'] = $namedoc;
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
}
