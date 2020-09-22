<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [

        'firstname'=>$faker->firstName(),
        'lastname'=>$faker->lastName,
        'phone'=>$faker->e164PhoneNumber,
        'email'=>$faker->unique()->safeEmail,
        'subject'=>$faker->sentence(),
        'message'=>$faker->realText(200,3 )
    ];
});
