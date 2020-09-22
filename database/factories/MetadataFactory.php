<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Metadata;
use Faker\Generator as Faker;

$factory->define(Metadata::class, function (Faker $faker) {
    return [
        'title'=>$faker->word,
        'description'=>$faker->sentence()
    ];
});
