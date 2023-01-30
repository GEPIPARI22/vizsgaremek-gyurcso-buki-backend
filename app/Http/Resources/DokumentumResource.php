<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DokumentumResource extends JsonResource
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
            'cim'=> $this->cim,
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at,
            'iskola_id' => (string)$this->iskola->id,
            'iskola_nev' => $this->iskola->nev
        ];
    }
}