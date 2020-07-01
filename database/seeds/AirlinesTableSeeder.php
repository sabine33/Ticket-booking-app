<?php

use App\Models\Airlines;
use Faker\Factory;
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

        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Airlines::create([
                'name' => $faker->unique()->randomElement(['Yeti Airlines', 'Buddha Air', 'Nepal Airlines', 'Himalaya Airlines', 'Surya Airlines', 'Simrik Airlines', 'Shree Airlines', 'Sita Airlines', 'Summit Air', 'Tara Airlines'])
            ]);
        }
    }
}
