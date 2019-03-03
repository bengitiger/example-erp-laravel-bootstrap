<?php

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'email'      => $faker->unique()->safeEmail,
        'phone'      => $faker->phoneNumber,
        'cellphone'  => $faker->phoneNumber,
        'address'    => $faker->address,
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});
