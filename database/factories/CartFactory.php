<?php

use App\Cart;
use Faker\Generator as Faker;
use App\Employee;
use App\Sale;

$factory->define(Cart::class, function (Faker $faker) {
    $employees = Employee::all();
    $sales     = Sale::all();

    return [
        'employee_id' => $employees[$faker->numberBetween(0, (count($employees) - 1))]->id,
        'sale_id'     => $sales[$faker->numberBetween(0, (count($sales) - 1))]->id,
        'created_at'  => $faker->dateTime('now'),
        'updated_at'  => $faker->dateTime('now'),
    ];
});
