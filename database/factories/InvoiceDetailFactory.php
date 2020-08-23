<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice;
use App\InvoiceDetail;
use Faker\Generator as Faker;

$factory->define(InvoiceDetail::class, function (Faker $faker) {
    $invoice_id = Invoice::all()->pluck('id');
    $qty = $faker->numberBetween(1,10);
    $unit = $faker->numberBetween(1000,30000);
    return [
        'invoice_id' => $faker->randomElement($invoice_id),
        'description' => $faker->sentence,
        'quantity' => $qty,
        'unit_price' => $unit,
        'total' => $qty * $unit,
    ];
});
