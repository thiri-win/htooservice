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
        'date' => $faker->dateTimeThisYear(),
        'client' => $faker->name(),
        'car_make' => $v['brand'],
        'car_no' => $faker->vehicleRegistration(),
        'car_model' => $v['model'],
        'phone' => $faker->phoneNumber,
        'sub_total' => 100000,
        'advanced' => 0,
        'discount' => 0,
        'grand_total' => 100000,
    ];
});

$factory->define(InvoiceDetail::class, function (Faker $faker) {
    $invoice_id = Invoice::all()->pluck('id');
    $unit_price = [10000, 20000, 30000, 40000, 50000, 60000, 70000, 80000, 100000];
    $unit = $faker->randomElement($unit_price);
    return [
        'invoice_id' => $faker->randomElement($invoice_id),
        'description' => $faker->sentence,
        'quantity' => 1,
        'unit_price' => $unit,
        'total' => 1 * $unit,
    ];
});

$factory->define(ExpenseCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
    ];
});

$factory->define(Expense::class, function (Faker $faker) {
    $expense_category_id = ExpenseCategory::all()->pluck('id');
    $total = [10000, 20000, 30000, 40000, 50000, 60000, 70000, 80000, 100000];
    return [
        'date' => $faker->dateTimeThisYear(),
        'title' => $faker->sentence,
        'body' => $faker->paragraph(),
        'expense_category_id' => $faker->randomElement($expense_category_id),
        'total' => $faker->randomElement($total),
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
    $price_list = [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 10000];
    $price = $faker->randomElement($price_list);
    $category = App\StockCategory::all();
    return [
        'date' => $faker->dateTimeThisYear(),
        'stock_category_id' => $faker->randomElement($category),
        'qty' => $qty,
        'price' => $price,
        'total' => $qty * $price,
        'supplier' => $faker->name(),
        'remark' => $faker->sentence(),
    ];
});

$factory->define(Sale::class, function (Faker $faker) {
    $invoice_id = Invoice::all()->pluck('id');
    $quantity = $faker->numberBetween(1,5);
    $price_list = [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 10000];
    $price = $faker->randomElement($price_list);
    $category = App\StockCategory::all()->pluck('id');
    return [
        'invoice_id' => $faker->randomElement($invoice_id),
        'stock_category_id' => $faker->randomElement($category),
        'quantity' => $quantity,
        'unit_price' => $price,
        'total' => $quantity * $price,
    ];
});