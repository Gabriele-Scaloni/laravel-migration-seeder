<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [

        'album_title'=> $faker -> text(5, 15),
        'number_of_songs'=> $faker -> numberBetween(1, 30),
        'price'=> $faker -> numberBetween(5, 50),
/*         'date'=> $faker -> name()
 */
    ];
});
