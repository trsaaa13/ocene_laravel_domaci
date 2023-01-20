<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Predmet;

class Ocena extends Model
{
    use HasFactory;

    public function predmet()
    {
        return $this->belongsTo(Predmet::class);
    }
}
