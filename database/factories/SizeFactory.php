<?php

use Faker\Generator as Faker;

$factory->define(App\Size::class, function (Faker $faker) {
    return [
        "pizza_id" => $faker->unique()->numberBetween(1, 5),
        "size" => "L",
        "available" => 1
    ];
});
