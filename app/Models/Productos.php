<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'idCategoria',
        'idmedida',
        'idmarca',
        'idresponsablecreacion',
        'descripcion',
        'fechacreacion',
        'fechamodificacion'];
}


