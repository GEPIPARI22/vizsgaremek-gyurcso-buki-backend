<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'vezeteknev' => $this->vezeteknev,
            'keresztnev' => (string)$this->keresztnev,
            'iskola_id' => $this->iskola_id,
            'iskola_nev' => $this->iskola->nev,
            'munkakor_id' => $this->munkakor_id,
            'munkakor_munkakor' => $this->munkakor->munkakor,
            'jog_iras' => $this->jog_iras,
            'jog_ertekeles' => $this->jog_ertekeles,
            'jog_admin' => $this->jog_admin,
            
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}