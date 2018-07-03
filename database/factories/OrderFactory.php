<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
	$type = $faker->randomElement(['pickup', 'delivery']);
    return [
        "customer_id" => $faker->randomElement([4, 5, 6, 7, 8, 9]),
        "note" => ($faker->randomElement([1, 0])) ? $faker->sentence(4) : null,
        "payment" => $faker->randomElement(['COD', 'CARD']),
        "type" => $type,
        "time" => ($type == "pickup") ? $faker->dateTime : null
    ];
});
