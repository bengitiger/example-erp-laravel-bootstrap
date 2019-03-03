<?php

use App\Store;
use Faker\Generator as Faker;
use App\Company;

$factory->define(Store::class, function (Faker $faker) {
    $companies = Company::all();

    return [
        'company_id' => $companies[$faker->numberBetween(0, (count($companies) - 1))]->id,
        'address'    => $faker->address,
        'phone'      => $faker->phoneNumber,
        'home'       => $faker->boolean(10),
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});
