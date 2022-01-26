<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [

        'name' => $faker -> firstName(),
        'lastname' => $faker -> lastName(),
        'nationality' => $faker -> state(30, 800),
        'date_of_birth' => $faker -> year(),
        
    ];
});
