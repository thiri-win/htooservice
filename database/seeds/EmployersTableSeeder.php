<?php

use Illuminate\Database\Seeder;
use App\Employer;

class EmployersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employer::class,20)->create();
    }
}
