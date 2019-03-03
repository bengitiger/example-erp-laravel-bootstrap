<?php

use App\Sale;
use Faker\Generator as Faker;
use App\Product;

$factory->define(Sale::class, function (Faker $faker) {
    $products = Product::all();

    return [
        'product_id' => $products[$faker->numberBetween(0, (count($products) - 1))]->id,
        'amount'     => $faker->numberBetween(1, 10),
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});
