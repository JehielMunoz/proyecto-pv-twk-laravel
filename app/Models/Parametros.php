<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Parametros extends Model
{
    protected $fillable = [
        'id',        'codigo',        'tipo',        'descripcion',        'valor'
    ];
}
