<?php

use App\Salary;
use Faker\Generator as Faker;
use App\Role;

$factory->define(Salary::class, function (Faker $faker) {
    $roles = Role::all();

    return [
        'role_id'    => $roles[$faker->numberBetween(0, (count($roles) - 1))]->id,
        'value'      => $faker->randomFloat(7, 1, 99999.99),
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});
