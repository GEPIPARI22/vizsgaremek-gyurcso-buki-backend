<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OraertekelesResource extends JsonResource
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
            
            
            'oralatogatas_id' => (string)$this->oralatogatas->id,
            'oralatogatas_idopont' => $this->oralatogatas->idopont,
            'oralatogatas_tantargy' => $this->oralatogatas->tantargy,
            
            'szempont'=> $this->szempont,
            'ertek'=> (string)$this->ertek,
            'szoveges'=> $this->szoveges,

            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
        ];
    }
}
