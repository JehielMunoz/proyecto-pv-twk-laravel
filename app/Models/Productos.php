<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'codigo';
    protected $fillable = [
        'codigo','nombre','idCategoria','idMedida','idMarca','idresponsableCreacion',
        'descripcion','fechaCreacion','fechaModificacion'
    ];

}
