<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    protected $table = 'nv_joinboletines';

    protected $fillable = [
        'title',
        'content',
        'idimagen',
        'idpublicacion',
        'image',
        'fuente',
        'date',
        'type'
    ];
}
