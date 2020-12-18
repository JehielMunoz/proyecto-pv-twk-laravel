<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProveedorProducto extends Model
{
    public $timestamps = false;
    protected $fillable = ['idProveedor', 'codigoProducto'];
}
