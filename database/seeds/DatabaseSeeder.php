<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@htoo.com',
            'password' => bcrypt('pass'),
        ]);

        factory(App\Employer::class,5)->create();
        factory(App\Position::class,5)->create();
        factory(App\ExpenseCategory::class,5)->create();
        factory(App\Expense::class, 10)->create();
        factory(App\StockCategory::class, 5)->create();
        factory(App\Stock::class, 10)->create();
        factory(App\Sale::class, 10)->create();
        factory(App\Invoice::class,5)->create();
        factory(App\InvoiceDetail::class,17)->create();        

        $this->call([
            ExperiencesTableSeeder::class,
        ]);
    }
}
