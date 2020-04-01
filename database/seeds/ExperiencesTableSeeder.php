<?php

use App\Experience;
use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = config('htooservice.experience_level');
        foreach ($levels as $level) {
        	factory(Experience::class)->create([
        		'level' => $level,
        	]);
        };
    }
}
