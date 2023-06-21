<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    use HasFactory;

    protected $table = 'passager';

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'idPassager');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'idPassager');
    }
}
