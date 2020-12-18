<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class creaProd extends Model
{
    protected $fillable = [
        'nombre','idCategoria','Marca','Unidad_de_medida','Descripcion',
        'idResponsableCreacion','Proveedor'
    ];
    public $timestamps = false;
}
