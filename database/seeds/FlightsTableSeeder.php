<?php

use App\Models\Airlines;
use App\Models\Flight;
use App\Models\Location;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::truncate();

        $faker = Factory::create();
        // id	departure_date	departure_time	departure_type	max_ticket_count	max_luggage_size	flight_duration	flight_price_economy	flight_price_business	flight_price_both_way_ratio	user_id	from_location_id	to_location_id	airlines_id	status	created_at	updated_at

        for ($i = 0; $i < 50; $i++) {
            Flight::create([
                'departure_date' => $faker->dateTimeBetween('now', '+30 days'),
                'departure_time' => $faker->time(),
                'departure_type' => $faker->randomElement(['one_way', 'two_way']),
                'max_ticket_count' => $faker->numberBetween(100, 200),
                'max_luggage_size' => $faker->numberBetween(25, 40),
                'flight_duration' => $faker->numberBetween(5, 20),
                'flight_price_economy' => $faker->numberBetween(5000, 30000),
                'flight_price_business' => $faker->numberBetween(10000, 40000),
                'flight_price_both_way_ratio' => $faker->numberBetween(1.5, 2),
                'airlines_id' => User::pluck('id')->random(),
                'status' => $faker->boolean,
                'airlines_id' => Airlines::pluck('id')->random(),
                'from_location_id' =>
                Location::pluck('id')->random(),
                'to_location_id' =>
                Location::pluck('id')->random()
            ]);
        }
    }
}
