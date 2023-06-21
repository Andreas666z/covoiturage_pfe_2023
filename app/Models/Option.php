<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Option extends Model
{
    use HasFactory;

    protected $table = 'option';

    public function voitures()
    {
        return $this->belongsToMany(Voiture::class, 'voiture_option', 'option_id', 'voiture_id');
    }
}
