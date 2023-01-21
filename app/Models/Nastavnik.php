<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Predmet;

class Nastavnik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_prezime',
        'godine',
        'email',
    ];

    public function predmeti()
    {
        return $this->hasMany(Predmet::class);
    }
}
