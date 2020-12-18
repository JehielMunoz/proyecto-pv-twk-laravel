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
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'idCategoria' => $this->idCategoria,
            'idMedida' => $this->idMedida,
            'idMarca' => $this->idMarca,
            'idresponsableCreacion' => $this->idresponsableCreacion,
            'descripcion' => $this->descripcion,
            'fechaCreacion' => $this->fechaCreacion,
            'fechaModificacion' => $this->fechaModificacion
        ];
    }
}
