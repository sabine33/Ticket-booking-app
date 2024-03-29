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

        $faker = Factory::create('ne_NP');

        for ($i = 0; $i < 10; $i++) {
            Location::create([
                'name' => $faker->unique()->randomElement(['Kathmandu', 'Pokhara', 'Dharan', 'Biratnagar', 'Bhairahawa', 'Butwal', 'Nepalgunj', 'Jhapa', 'Bharatpur', 'Mahendranagar'])
            ]);
        }
    }
}
