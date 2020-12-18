<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreaProdResource extends JsonResource
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
            'nombre' => $this->nombre,
            'idCategoria' => $this->idCategoria,
            'Marca' => $this->Marca,
            'Unidad_de_medida' => $this->Unidad_de_medida,
            'Descripcion' => $this->Descripcion,
            'idResponsableCreacion' => $this->idResponsableCreacion
        ];
    }
}
