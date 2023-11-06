<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
    protected $fillable = ['nome', 'cpf', 'idade', 'festa_id'];

    // Defina os relacionamentos, por exemplo:
    public function festa()
    {
        return $this->belongsTo(Festa::class);
    }
}
