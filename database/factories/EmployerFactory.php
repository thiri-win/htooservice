<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employer;
use Faker\Generator as Faker;

$factory->define(Employer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'dob' => $faker->date,
        'nrc' => $faker->isbn10,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'about' => $faker->paragraph,
    ];
});
