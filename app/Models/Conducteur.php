<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;

    protected $table = 'conducteur';

    public function messages()
    {
        return $this->hasMany(Message::class, 'idConducteur');
    }
}
