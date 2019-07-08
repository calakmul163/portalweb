<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    protected $table = 'nv_info';

    protected $fillable = [
        'title',
        'descripction',
        'keywords',
        'address',
        'phone',
        'email',
        'active'
    ];
}
