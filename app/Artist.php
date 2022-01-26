<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'name',
        'lastname',
        'lyric' ,
        'duration'
    ];
}
