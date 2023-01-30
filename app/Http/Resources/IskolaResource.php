<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IskolaResource extends JsonResource
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
            'nev'=> $this->nev,
            'om_azonosito'=> $this->om_azonosito,
            'iranyitoszam'=> $this->iranyitoszam,
            'varos'=> $this->varos,
            'utca'=> $this->utca,
            'telefon'=> $this->telefon,
            'email'=> $this->email,
            'logo'=> $this->logo,
            
            'created_at'=> $this->created_at,
            'updated_at'=> $this->updated_at,
        ];
    }
}
