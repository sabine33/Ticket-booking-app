<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //id :,airlines_id:,from_location_id:,to_location_id:,departure_date:,departure_time:,departure_type?,max_ticket_count:,max_luggage_size?,flight_duration:,flight_price_economy?,flight_price_business:,flight_price_both_way_ratio?,user_id

        Schema::dropIfExists('flights');

        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->date('departure_date');
            $table->time('departure_time');
            $table->string('departure_type');

            $table->integer('max_ticket_count')->unsigned();
            $table->integer('max_luggage_size')->unsigned();
            $table->float('flight_duration')->unsigned();
            $table->integer('flight_price_economy')->unsigned();
            $table->integer('flight_price_business')->unsigned();
            $table->float('flight_price_both_way_ratio')->unsigned();


            $table->integer('from_location_id')->unsigned()->nullable();
            $table->integer('to_location_id')->unsigned()->nullable();
            $table->integer('airlines_id')->unsigned()->nullable();

            // $table->foreign('from_location_id')
            //     ->references('id')
            //     ->on('locations');
            // $table->foreign('to_location_id')
            //     ->references('id')
            //     ->on('locations');

            // $table->foreign('airlines_id')
            //     ->references('id')
            //     ->on('airlines');
            $table->boolean('is_international');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
