<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ertekeles extends Model
{
    protected $table = "ertekeles";
    use HasFactory;
    protected $fillable = [
        'oktato_id','szempontsor_id','idopont','terulet1',
        'terulet2','terulet3','terulet4','terulet5','terulet6',
        'terulet7','terulet8','terulet9','terulet10','lezarva'
    ];

    public function oktato() {
        return $this->belongsTo(Oktato::class);
    }
    public function szempontsor() {
        return $this->belongsTo(Szempontsor::class);
    }
}
