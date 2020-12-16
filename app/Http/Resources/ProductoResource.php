<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
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
            'id' => $this->id,
            'Nombre' => $this->nombre,
            'Marca' => $this->marca,
            'Precio' => $this->precio,
            'Cantidad' => $this->cantidad,
            'Descuento' => $this->descuento,
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'idCategoria' => $this->idCat,
            'idmedida' => $this->idMed,
            'idmarca' => $this->idMar,
            'idresponsablecreacion' => $this->idResp,
            'descripcion' => $this->descripcion,
            'fechacreacion' => $this->fCreacion,
            'fechamodificacion' => $this->fModificacion
        ];
    }
}
