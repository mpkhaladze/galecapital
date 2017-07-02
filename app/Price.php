<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'black_home',
        'white_home', 
        'black_comercial',
        'white_comercial',
    ];
}
