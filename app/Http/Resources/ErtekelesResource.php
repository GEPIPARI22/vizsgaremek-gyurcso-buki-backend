<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ErtekelesResource extends JsonResource
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
            
            'oktato_id' => (string)$this->oktato->id,
            'oktato_vezeteknev' => $this->oktato->vezeteknev,
            'oktato_keresztnev' => $this->oktato->keresztnev,
            'oktato_iskola_id' => $this->oktato->iskola_id,
            'oktato_iskola_nev' => $this->oktato->iskola->nev,
            'oktato_om_azonosito' => $this->oktato->om_azonosito,
            'oktato' => new OktatoResource($this->oktato),

            'szempontsor_id' => (string)$this->szempontsor->id,
            'szempontsor_megnevezes' => $this->szempontsor->megnevezes,
            
            'idopont' => $this->idopont,
            'terulet1' => $this->terulet1,
            'terulet2' => $this->terulet2,
            'terulet3' => $this->terulet3,
            'terulet4' => $this->terulet4,
            'terulet5' => $this->terulet5,
            'terulet6' => $this->terulet6,
            'terulet7' => $this->terulet7,
            'terulet8' => $this->terulet8,
            'terulet9' => $this->terulet9,
            'terulet10' => $this->terulet10,
            'lezarva' => $this->lezarva,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}