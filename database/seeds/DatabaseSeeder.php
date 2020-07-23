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

        factory(App\Category::class, 5)->create();

        factory(App\Expense::class, 20)->create();

        // factory(App\Employer::class, 10)->create()->each(function ($employer) {
        //     $employer->experiences->create([
        //         'content' => 'hello',
        //     ]);
        // });

        $this->call([
            EmployersTableSeeder::class,
        	PositionsTableSeeder::class,
            ExperiencesTableSeeder::class,
        ]);
    }
}
