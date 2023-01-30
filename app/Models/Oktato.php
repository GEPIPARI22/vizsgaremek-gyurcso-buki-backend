<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oktato extends Model
{
    use HasFactory;

    protected $fillable = [
        'vezeteknev','keresztnev','om_azonosito','iskola_id','munkakor_id','vegzettsegek',
        'tovabbkepzesek','oneletrajz'
    ];

    public function iskola() {
        return $this->belongsTo(Iskola::class);
    }

    public function munkakor() {
        return $this->belongsTo(Munkakor::class);
    }

    public function ertekeles()
    {
        return $this->hasMany(Ertekeles::class);
    }

    public function oralatogatas()
    {
        return $this->hasMany(Oralatogatas::class);
    }
}
