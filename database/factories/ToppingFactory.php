<?php

use Faker\Generator as Faker;

$factory->define(App\Topping::class, function (Faker $faker) {
    return [
        "name" => $faker->randomElement(['Extra Cheese', 'Extra Pepperoni', 'Extra Bacon']),
        "description" => $faker->sentence(5),
        "price" => 50,
        "available" => $faker->randomElement([0, 1]),
        "product_code" => $faker->bothify('??##OPPING')
    ];
});
