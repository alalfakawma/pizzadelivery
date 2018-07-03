<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('pizza_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->integer('topping_id')->unsigned()->nullable();
            $table->integer('discount_code_id')->unsigned()->nullable();
            $table->integer('quantity')->unsigned();
            $table->integer('total');
            $table->timestamps();

            $table->foreign('order_id')
                    ->references('id')
                    ->on('orders')
                    ->onDelete('cascade');
            $table->foreign('pizza_id')
                    ->references('id')
                    ->on('pizzas')
                    ->onDelete('cascade');
            $table->foreign('size_id')
                    ->references('id')
                    ->on('sizes')
                    ->onDelete('cascade');
            $table->foreign('topping_id')
                    ->references('id')
                    ->on('toppings')
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
        Schema::dropIfExists('order_items');
    }
}
