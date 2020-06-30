<?php

use App\Models\Flight;
use App\Models\Cart;
use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;


class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::truncate();

        $faker = Factory::create();

        // And now, let's create a few articles in our database:
        //                'flight_id', 'user_id', 'ticket_count', 'cart_status', 'status'

        for ($i = 0; $i < 50; $i++) {
            Cart::create([
                'flight_id' => Flight::pluck('id')->random(),
                'user_id' => User::pluck('id')->random(),
                'ticket_count' => $faker->numberBetween(1, 5),
                'cart_status' => $faker->boolean(),
                'status' => true
            ]);
        }
    }
}
