<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'firstname'=>$faker->firstName(),
        'lastname'=>$faker->lastName,
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->unique()->safeEmail,
    ];
});
