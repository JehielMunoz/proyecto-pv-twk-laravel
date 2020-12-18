<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IngresoProdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Nombre' => $this->nombre,
            'Proveedor' => $this->proveedor,
            'Marca' => $this->marca,
            'Categoria' => $this->categoria,
            'Unidad de medida'
            'Precio' => $this->precio,
            'Cantidad' => $this->cantidad,
            'Descuento' => $this->descuento,
        ];
    }
}
CodigoProd,Cantidad,NumeroLote,fechaVencimiento,Ubicacion,idResponsable,fechaOperacion
