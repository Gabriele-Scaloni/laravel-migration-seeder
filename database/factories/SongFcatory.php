<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'linguage' => $faker -> text(10, 30),
        'lyric' => $faker -> text(300, 800),
        'duration' => $faker -> numberBetween(60, 500),
    ];
});
