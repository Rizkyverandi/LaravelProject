<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Episodes;
use Faker\Generator as Faker;

$factory->define(App\Episodes::class, function (Faker $faker) {
    static $value=1;
    return [
        'title'=>$faker->realText($maxNbChars = 100, $indexSize = 2) ,
        'movie_id'=>1, 
        'episode'=>$value++
    ];
});



