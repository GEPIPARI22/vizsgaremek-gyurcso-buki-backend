<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oraertekeles extends Model
{
    use HasFactory;

    protected $fillable = [
        'oralatogatas_id','szempont','ertek','szoveges'
    ];

    public function oralatogatas() {
        return $this->belongsTo(Oralatogatas::class);
    }
}
