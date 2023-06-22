<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    use HasFactory;

    protected $table = 'passager';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    //Hiding Attributes From JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'idPassager');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'idPassager');
    }
}
