<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        //
        'ci' => $faker->phoneNumber(8),
        'nombres' => $faker->firstName(50),
        'apellidos' => $faker->lastName(50),
    ];
});
