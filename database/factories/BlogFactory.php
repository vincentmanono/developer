<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $title = $faker->realText(50,2);
    return [
        'title' => $faker->word(),
        'subtitle'=>$faker->realText(10,2),
        'user_id'=>function(){return App\User::all()->random(); },
        'body'=>$faker->realText(300,3),
        'image'=>'https://source.unsplash.com/random'

    ];
});
