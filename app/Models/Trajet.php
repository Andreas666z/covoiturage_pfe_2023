<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

    protected $table = 'trajet';

    public function voiture()
    {
        return $this->belongsTo(Voiture::class, 'idVoiture');
    }

    public function points()
    {
        return $this->hasMany(Point::class, 'idTrajet');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'idTrajet');
    }
}
