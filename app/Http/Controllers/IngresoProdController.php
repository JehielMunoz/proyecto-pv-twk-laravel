<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Resources\IngresoProdResource;
use app\Models\IngresoProductos;
class IngresoProdController extends Controller
{
    protected function validateRequest()
    {
        return request()->validate([
            'nombre' => 'required|min:5|max:255',
            'marca' => 'required|min:5|max:255',
            'Precio' => 'required|integer|max:11',
            'Cantidad' => 'required|integer|max:11',
        ]);
    }

    public function store()
    {           #$this
        $data = $this->validateRequest(); #validate se define antes de usar
        $producto = Productos::create($data); #entrega data con la estructura del modelo
        return new ProductoResource($producto);
    }

    public function update(Productos $producto)
    {
        $data = $this->validateRequest();
        $producto->update($data);
        return new ProductoResource($producto);
    }

    public function destroy(Productos $productos)
    {
        $productos->delete();
        return response()->noContent();
    }
}


