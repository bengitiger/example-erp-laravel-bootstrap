<?php

use App\Delivery;
use Faker\Generator as Faker;
use App\Cart;
use App\Customer;

$factory->define(Delivery::class, function (Faker $faker) {
    $carts     = Cart::all();
    $customers = Customer::all();

    return [
        'cart_id'     => $carts[$faker->numberBetween(0, (count($carts) - 1))]->id,
        'customer_id' => $customers[$faker->numberBetween(0, (count($customers) - 1))]->id,
        'created_at'  => $faker->dateTime('now'),
        'updated_at'  => $faker->dateTime('now'),
    ];
});
