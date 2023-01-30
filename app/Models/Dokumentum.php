<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentum extends Model
{
    use HasFactory;

    protected $fillable = [
        'cim','mappa','iskola_id'
    ];

    public function iskola() {
        return $this->belongsTo(Iskola::class);
    }
}
