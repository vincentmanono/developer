<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'blog_id'=>function(){return App\Blog::all()->random();}, 
        'email'=>$faker->unique->safeEmail,
        'body'=>$faker->realText(15,3)

    ];
});
