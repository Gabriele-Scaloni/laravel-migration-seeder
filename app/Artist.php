<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
//creo l'array richiamando le variabili $table che ho creato nel creat_artists_table.phpche andrà a popolare il db
        'name',
        'lastname',
        'nationality' ,
        'date_of_birth'
    ];
}
