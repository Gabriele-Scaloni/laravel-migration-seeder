<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable =[
    'album_title',
    'number_of_songs',
    'price',
/*     'date'
 */    ];
}
