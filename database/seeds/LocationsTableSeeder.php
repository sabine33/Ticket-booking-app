<?php

use App\Models\Location;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Location::create([
                'name' => $faker->unique()->country
            ]);
        }
    }
}
