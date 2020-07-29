<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    $qty = $faker->numberBetween(20,50);
    $price = $faker->numberBetween(100,10000);
    $category = App\StockCategory::all();
    return [
        'date' => $faker->dateTimeThisMonth(),
        'stock_category_id' => $faker->randomElement($category),
        'qty' => $qty,
        'price' => $price,
        'total' => $qty * $price,
        'supplier' => $faker->name(),
        'remark' => $faker->sentence(),
    ];
});
