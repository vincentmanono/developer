<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portfolio;
use App\PortfolioUser;
use Faker\Generator as Faker;

$factory->define(PortfolioUser::class, function (Faker $faker) {
    return [
        'portfolio_id'=>function(){return App\Portfolio::all()->random();},
        'user_id'=>function(){return App\User::all()->random();}
    ];
});
