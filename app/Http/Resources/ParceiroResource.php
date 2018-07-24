<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;



class ParceiroResource extends JsonResource
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
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'apdated_at' => $this->updated_at];
    }
}
