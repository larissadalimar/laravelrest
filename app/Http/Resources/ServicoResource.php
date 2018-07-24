<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicoResource extends JsonResource
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
            'empresa' => $this->empresa,
            'telefone' => $this->telefone,
            'tipo' => $this->tipo,
            'created_at' => $this->created_at,
            'apdated_at' => $this->updated_at];
    }
}
