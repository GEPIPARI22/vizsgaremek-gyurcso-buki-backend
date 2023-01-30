<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SzempontResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            
            'szempontsor_id' => (string)$this->szempontsor->id,
            'szempontsor_megnevezes' => $this->szempontsor->megnevezes,
            'szempontsor_iskola_id' => $this->szempontsor->iskola_id,

            'terulet'=> $this->terulet,
            'szempont'=> $this->szempont,
            'magyarazat'=> $this->magyarazat,
            'kiegeszites'=> $this->kiegeszites,
            'kapcsolodo'=> $this->kapcsolodo,
            'adatforras'=> $this->adatforras,
            'ertek'=> $this->ertek,
            'sulyszorzo'=> $this->sulyszorzo,
            'sulyozott'=> $this->sulyozott,

            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
        ];
    }
}
