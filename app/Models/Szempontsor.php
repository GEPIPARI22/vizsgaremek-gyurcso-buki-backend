<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szempontsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'megnevezes','iskola_id','lezarva'
    ];

    public function iskola() {
        return $this->belongsTo(Iskola::class);
    }

    public function szempont()
    {
        return $this->hasMany(Szempont::class);
    }
}
