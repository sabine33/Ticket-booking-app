<?php

use App\Models\Airlines;
use Illuminate\Database\Seeder;

class AirlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Airlines::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Airlines::create([
                'name' => $faker->unique()->country . ' Airlines'
            ]);
        }
    }
}
