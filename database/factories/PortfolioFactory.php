<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    return [
        'title'=>$faker->word,
        'description'=>$faker->sentence(),
        'image'=>$faker->word(),
        'client_id'=>function(){return App\Client::all()->random();}
    ];
});
