<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OktatoResource extends JsonResource
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
            'vezeteknev'=> $this->vezeteknev,
            'keresztnev'=> $this->keresztnev,
            'om_azonosito'=> $this->om_azonosito,
            
            'iskola_id' => (string)$this->iskola->id,
            'iskola_nev' => $this->iskola->nev,
            'iskola' => new IskolaResource($this->iskola),
            
            'munkakor_id' => (string)$this->munkakor->id,
            'munkakor_munkakor' => $this->munkakor->munkakor,

            'vegzettsegek'=> $this->vegzettsegek,
            'tovabbkepzesek'=> $this->tovabbkepzesek,
            'oneletrajz'=> $this->oneletrajz,
            
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
        ];
    }
}
