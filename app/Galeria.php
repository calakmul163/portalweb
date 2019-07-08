<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    //
    protected $table = 'nv_joingaleria';

    protected $fillable = [
        'title',
        'url',
        'idimagen',
        'idpublicacion',
        'image',
        'type',
        'active'
    ];
}
