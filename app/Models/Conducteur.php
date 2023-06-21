<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory;

    protected $table = 'conducteur';

    //Hiding Attributes From JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];


    public function messages()
    {
        return $this->hasMany(Message::class, 'idConducteur');
    }
}
