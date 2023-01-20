<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nastavnik;
use App\Models\Ocena;

class Predmet extends Model
{
    use HasFactory;

    public function nastavnik()
    {
        return $this->belongsTo(Nastavnik::class);
    }

    public function ocene()
    {
        return $this->hasMany(Ocena::class);
    }
}
