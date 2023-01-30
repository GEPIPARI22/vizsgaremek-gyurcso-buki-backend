<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oralatogatas extends Model
{
    use HasFactory;

    protected $fillable = [
        'oktato_id','latgato','idopont','helyszin','tantargy',
        'tema','osztaly','oktato_megjegyzes','osszegzes','dokumentum'
    ];

    public function oktato() {
        return $this->belongsTo(Oktato::class);
    }

    public function oraertekeles()
    {
        return $this->hasMany(Oraertekeles::class);
    }
}
