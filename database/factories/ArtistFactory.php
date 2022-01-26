<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
//assegno nomi casuali che poi ritroverò nel bd
        'name' => $faker -> firstName(),
        'lastname' => $faker -> lastName(),
        'nationality' => $faker -> state(30, 800),
        'date_of_birth' => $faker -> date(),
        
    ];
});
