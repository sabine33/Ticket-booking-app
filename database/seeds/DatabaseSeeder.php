<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AirlinesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(FlightsTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(CartTableSeeder::class);
    }
}
