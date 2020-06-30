<?php

use App\Models\Flight;
use App\Models\Ticket;
use App\User;
use Illuminate\Database\Seeder;


class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::truncate();

        $faker = \Faker\Factory::create();
        // id	user_id	flight_id	adults_count	kids_count	passenger_name	passenger_email	passenger_address	total_cost	departure_type	ticket_type	is_confirmed	status	created_at	updated_at
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Ticket::create([
                'flight_id' => Flight::pluck('id')->random(),
                'user_id' => User::pluck('id')->random(),
                'adults_count' => $faker->numberBetween(1, 3),
                'kids_count' => $faker->numberBetween(0, 2),
                'passenger_name' => $faker->name(),
                'passenger_email' => $faker->email,
                'passenger_address' => $faker->address,
                'passenger_phone' => $faker->phoneNumber,
                'total_cost' => $faker->numberBetween(30000, 50000),
                'departure_type' => $faker->randomElement(['one_way', 'two_way']),
                'ticket_type' => $faker->randomElement(['economy', 'business']),
                'is_confirmed' => $faker->boolean, 'status' => $faker->boolean,

            ]);
        }
    }
}
