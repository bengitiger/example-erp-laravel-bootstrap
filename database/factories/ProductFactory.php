<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'         => $faker->word,
        'stock'        => $faker->numberBetween(0, 1000),
        'low_quantity' => $faker->numberBetween(50, 200),
        'created_at'   => $faker->dateTime('now'),
        'updated_at'   => $faker->dateTime('now'),
    ];
});
