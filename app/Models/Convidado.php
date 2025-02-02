<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
    use HasFactory;

    protected $table = 'convidados';


    protected $fillable=[
        'name',
        'cpf',
        'idade',
        'id_festa',
    ];
}
