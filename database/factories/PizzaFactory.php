<?php

use Faker\Generator as Faker;

$factory->define(App\Pizza::class, function (Faker $faker) {
    return [
        "name" => $faker->lexify('???? Pizza'),
        "description" => $faker->sentence(6),
        "price" => $faker->randomNumber(3),
        "product_code" => $faker->bothify('??##IZZA'),
        "available" => $faker->randomElement([1, 0])
    ];
});
