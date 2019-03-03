<?php

use App\Expense;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {
    return [
        'description' => $faker->text(),
        'value'       => $faker->randomFloat(8, 1, 999999.99),
        'created_at'  => $faker->dateTime('now'),
        'updated_at'  => $faker->dateTime('now'),
    ];
});
