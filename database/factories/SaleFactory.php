<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker) {
    $qty = $faker->numberBetween(1,10);
    $price = $faker->numberBetween(100,10000);
    $category = App\StockCategory::all();
    return [
        'date' => $faker->dateTimeThisMonth(),
        'stock_category_id' => $faker->randomElement($category),
        'qty' => $qty,
        'price' => $price,
        'total' => $qty * $price,
        'customer' => $faker->name(),
        'remark' => $faker->sentence(),
    ];
});
