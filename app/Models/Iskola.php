<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iskola extends Model
{
    use HasFactory;

    protected $fillable = [
        'nev','om_azonosito','iranyitoszam','varos','utca','telefon',
        'email','logo','fenykep'
    ];

    public function oktato()
    {
        return $this->hasMany(Oktato::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function szempontsor()
    {
        return $this->hasMany(Szempontsor::class);
    }
}
