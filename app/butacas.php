<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class butacas extends Model
{
    protected $fillable = [
        'fila',
        'columna',
        'estado',
        'sector_id',

    ];
}
