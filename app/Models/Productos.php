<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = ['Nombre','Marca','Precio','Cantidad'];
}
