<?php

use Faker\Generator as Faker;

$factory->define(App\OrderItem::class, function (Faker $faker) {
	$pizzaId = $faker->randomElement([1,2,3,4,5]);
	$quantity = $faker->randomDigitNotNull;
    return [
        "order_id" => $faker->numberBetween(1,9),
        "pizza_id" => $pizzaId,
        "size_id" => $faker->randomElement([1,2,3]),
        "topping_id" => ($faker->randomElement([1,0])) ? $faker->randomElement([1,2,3]) : null,
        "quantity" => $quantity,
        "discount_code_id" => null,
        "total" => (\App\Pizza::find($pizzaId)->price * $quantity)
    ];
});
