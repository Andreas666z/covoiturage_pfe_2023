<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservation';

    public function passager()
    {
        return $this->belongsTo(Passager::class, 'idPassager');
    }

    public function trajet()
    {
        return $this->belongsTo(Trajet::class, 'idTrajet');
    }

    public function avis()
    {
        return $this->hasOne(Avis::class, 'idReservation');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'idReservation');
    }
}
