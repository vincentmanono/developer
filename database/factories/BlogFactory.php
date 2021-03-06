<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    $title = $faker->realText(50,2);
    return [
        'title' => $faker->word(),
        'subtitle'=>$faker->sentence($nbWords = 6, $variableNbWords = true) ,
        'user_id'=>function(){return App\User::all()->random(); },
        'body'=>$faker->realText(300,3),
       'slug'=>$faker->word(),
       'image'=> $faker->imageUrl()
    //    'image'=>$faker->image('public/storage/images',640,480, null, false)

    ];
});
