<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'message';

    public function passager()
    {
        return $this->belongsTo(Passager::class, 'idPassager');
    }

    public function conducteur()
    {
        return $this->belongsTo(Conducteur::class, 'idConducteur');
    }
}
