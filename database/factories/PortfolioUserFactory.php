<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Portfolio;
use App\PortfolioUser;
use Faker\Generator as Faker;

$factory->define(PortfolioUser::class, function (Faker $faker) {
    return [
        'portfolio_id'=>function(){return Portfolio::all()->random();},
        'user_id'=>function(){return User::all()->random();}
    ];
});
