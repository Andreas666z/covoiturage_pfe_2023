<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $table = 'point';

    public function trajet()
    {
        return $this->belongsTo(Trajet::class, 'idTrajet');
    }
}
