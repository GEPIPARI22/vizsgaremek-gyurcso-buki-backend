<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OralatogatasResource extends JsonResource
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

            'latogato_id' => (string)$this->oktato->id,
            'latogato_vezeteknev' => $this->oktato->vezeteknev,
            'latogato_keresztnev' => $this->oktato->keresztnev,

            'idopont'=> $this->idopont, //date
            'helyszin'=> $this->helyszin,
            'tantargy'=> $this->tantargy,
            'tema'=> $this->tema,
            'osztaly'=> $this->osztaly,
            'oktato_megjegyzes'=> $this->oktato_megjegyzes,
            'osszegzes'=> $this->osszegzes,
            'dokumentum'=> $this->dokumentum,
            

            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at
        ];
    }
}
