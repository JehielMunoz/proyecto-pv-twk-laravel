<?php

namespace App\Http\Controllers;
use app\Models\Productos;
use app\Http\Resources\ProductoResource;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {               #Productos: nombre de la clase en modelo
        $productos = Productos::orderby('nombre')->get();
              #ProductoResource: Nombre de la clase en resource
        return ProductoResource::collection($productos); #collection permite hacer un arreglo de texto
    }
    public function show(Productos $producto) #Es de tipo producto(modelo)
    {
        return new ProductoResource($producto); #Se debe hacer una nueva instancia del product resource
    }
    protected function validateRequest()
    {
        return request()->validate([
            'nombre'    =>  'required|min:5|max:255',
            'marca'     =>  'required|min:5|max:255',
            'Precio'    =>  'required|integer|max:11',
            'Cantidad'  =>  'required|integer|max:11',
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






















