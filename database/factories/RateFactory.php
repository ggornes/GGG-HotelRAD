<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rate;
use Faker\Generator as Faker;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        //
        'rate' => $faker->numberBetween(100,5000),
        'description' => $faker->sentence(3)
    ];
});
