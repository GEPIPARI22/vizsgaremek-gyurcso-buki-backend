<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SzempontResource;

class SzempontsorResource extends JsonResource
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
            'megnevezes'=> $this->megnevezes,
            'iskola_id' => $this->iskola->id,
            'iskola_nev' => $this->iskola->nev,
            
            'lezarva'=> $this->lezarva,

            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
        ];
    }
}
