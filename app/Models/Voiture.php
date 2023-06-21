<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $table = 'voiture';

    public function options()
    {
        return $this->belongsToMany(Option::class, 'voiture_option', 'idVoiture', 'idOption');
    }

    public function trajets()
    {
        return $this->hasMany(Trajet::class, 'idVoiture');
    }
}
