<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    $v = $faker->vehicleArray();
    
    return [
        'date' => $faker->dateTimeThisMonth(),
        'client' => $faker->name(),
        'car_make' => $v['brand'],
        'car_no' => $faker->vehicleRegistration(),
        'car_model' => $v['model'],
        'phone' => $faker->phoneNumber,
        'sub_total' => 1234,
        'advanced' => 0,
        'discount' => 0,
        'grand_total' => 1234,
    ];
});
