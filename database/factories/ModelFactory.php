<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employer;
use App\Expense;
use App\ExpenseCategory;
use App\Experience;
use App\Invoice;
use App\InvoiceDetail;
use App\Position;
use App\Sale;
use App\Stock;
use App\StockCategory;
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

$factory->define(Position::class, function (Faker $faker) {
    return [
        'jobtitle' => $faker->jobTitle,
    ];
});

$factory->define(Experience::class, function (Faker $faker) {
    return [
        'level' => $faker->word,
    ];
});

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

$factory->define(ExpenseCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
    ];
});

$factory->define(Expense::class, function (Faker $faker) {
    $expense_category_id = ExpenseCategory::all()->pluck('id');
    return [
        'date' => $faker->dateTimeThisMonth(),
        'title' => $faker->sentence,
        'body' => $faker->paragraph(),
        'expense_category_id' => $faker->randomElement($expense_category_id),
        'amount' => $faker->numberBetween(1000,30000)
    ];
});

$factory->define(StockCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'remark' => $faker->sentence,
    ];
});

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