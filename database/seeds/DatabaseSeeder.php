<?php

use App\ExpenseCategory;
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

        $expense_categories = config('htooservice.expense_category');
        foreach ($expense_categories as $category) {
        	factory(ExpenseCategory::class)->create([
        		'title' => $category,
        	]);
        };

        factory(App\Expense::class, 10)->create();

        $stock_categories = config('htooservice.stock_category');
        foreach ($stock_categories as $category) {
        	factory('App\StockCategory')->create([
        		'title' => $category,
        	]);
        };

        factory(App\Stock::class, 10)->create();

        factory(App\Invoice::class,20)->create()->each(function($invoice) {
            factory(App\Sale::class, 2)->create();
            factory(App\InvoiceDetail::class,3)->create();
        });     
        
        $invoices = App\Invoice::all();
        foreach($invoices as $invoice) {
            $invoice->update([
                'sub_total' => $invoice->details->sum('total') + $invoice->sales->sum('total'),
                'grand_total' => $invoice->details->sum('total') + $invoice->sales->sum('total'),
            ]);
        }

        $this->call([
            ExperiencesTableSeeder::class,
        ]);
    }
}
