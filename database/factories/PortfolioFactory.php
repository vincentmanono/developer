<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    return [
        'title'=>$faker->word,
        'description'=>$faker->sentence(),
        'url'=>$faker->url,
        'image'=>$faker->imageUrl(),
        'cpanelpassword'=>$faker->word(),
        'client_id'=>function(){return Client::all()->random();}
    ];
});
