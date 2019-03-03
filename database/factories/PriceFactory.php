<?php

use App\Price;
use Faker\Generator as Faker;
use App\Product;

$factory->define(Price::class, function (Faker $faker) {
    $products = Product::all();

    return [
        'product_id' => $products[$faker->numberBetween(0, (count($products) - 1))]->id,
        'value'      => $faker->randomFloat(7, 1, 99999.99),
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});
