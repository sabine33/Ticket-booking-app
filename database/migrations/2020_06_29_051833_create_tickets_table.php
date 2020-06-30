<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //id,adults_count,kids_count,flight_id,passenger_name,passenger_email,passenger_address,total_cost,departure_type,ticket_type,is_confirmed,user_id,booked_at

        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            // $table->increments('ticket_id');
            $table->integer('user_id')->unsigned();
            $table->integer('flight_id')->unsigned();
            $table->integer('adults_count')->unsigned();
            $table->integer('kids_count')->unsigned();
            $table->string('passenger_name');
            $table->string('passenger_email');
            $table->string('passenger_address');
            $table->string('passenger_phone');
            $table->integer('total_cost')->unsigned();
            $table->string('departure_type');
            $table->string('ticket_type');
            $table->boolean('is_confirmed');


            $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('cascade');

            $table->foreign('flight_id')
                ->references('id')
                ->on('flights')
                ->onDelete('cascade');

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
        Schema::dropIfExists('tickets');
    }
}
