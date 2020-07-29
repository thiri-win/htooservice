<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StockCategory;
use Faker\Generator as Faker;

$factory->define(StockCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'remark' => $faker->sentence,
    ];
});
