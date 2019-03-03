<?php

use App\Purchase;
use Faker\Generator as Faker;
use App\Product;
use App\Supplier;

$factory->define(Purchase::class, function (Faker $faker) {
    $products  = Product::all();
    $suppliers = Supplier::all();

    return [
        'product_id'  => $products[$faker->numberBetween(0, (count($products) - 1))]->id,
        'supplier_id' => $suppliers[$faker->numberBetween(0, (count($suppliers) - 1))]->id,
        'amount'      => $faker->numberBetween(1, 5),
        'price_unit'  => $faker->randomFloat(7, 1, 99999.99),
        'created_at'  => $faker->dateTime('now'),
        'updated_at'  => $faker->dateTime('now'),
    ];
});
