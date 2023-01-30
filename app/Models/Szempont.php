<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szempont extends Model
{
    use HasFactory;

    protected $fillable = [
        'szempontsor_id','terulet','szempont','magyarazat','kiegeszites',
        'kapcsolodo', 'adatforras', 'ertek', 'sulyszorzo', 'sulyozott'
    ];

    public function szempontsor() {
        return $this->belongsTo(Szempontsor::class);
    }
}
