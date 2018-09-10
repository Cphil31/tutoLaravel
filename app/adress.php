<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adress extends Model
{
    protected $fillable = [
        'N°_de_rue', 'adresse', 'code_postal','ville',

    ];
}
