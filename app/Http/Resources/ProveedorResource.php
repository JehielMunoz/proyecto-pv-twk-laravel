<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProveedorResource extends JsonResource
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
            'razonSocial' => $this->razonSocial,
            'rut' => $this->rut,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
        ];
    }
}
