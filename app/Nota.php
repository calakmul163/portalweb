<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //
    protected $table = 'nv_joinboletines';

    protected $fillable = [
        'title',
        'content',
        'fuente',
        'date',
        'type'
    ];
}
