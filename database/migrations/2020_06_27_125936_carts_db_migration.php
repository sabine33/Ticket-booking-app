<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartsDbMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->increments('cart_id');
            $table->integer('user_id')->unsigned();
            $table->integer('flight_id')->unsigned();
            $table->integer('ticket_count')->unsigned();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('set null');

            $table->foreign('flight_id')
                ->references('id')
                ->on('flights')
                ->onDelete('set null');

            $table->string('cart_status');
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
        Schema::dropIfExists('carts');
    }
}
