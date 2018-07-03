<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountCodesAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_codes_availability', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pizza_id')->unsigned();
            $table->integer('discount_code_id')->unsigned();
            $table->timestamps();

            $table->foreign('pizza_id')
                    ->references('id')
                    ->on('pizzas')
                    ->onDelete('cascade');
            $table->foreign('discount_code_id')
                    ->references('id')
                    ->on('discount_codes')
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
        Schema::dropIfExists('discount_codes_availability');
    }
}
