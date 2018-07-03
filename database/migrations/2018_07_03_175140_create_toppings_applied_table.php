<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToppingsAppliedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toppings_applied', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_items_id')->unsigned();
            $table->integer('topping_id')->unsigned();
            $table->timestamps();

            $table->foreign('order_items_id')
                    ->references('id')
                    ->on('order_items')
                    ->onDelete('cascade');
            $table->foreign('topping_id')
                    ->references('id')
                    ->on('toppings')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toppings_applied');
    }
}
