<?php

use App\Employee;
use Faker\Generator as Faker;
use App\User;
use App\Role;
use App\Store;

$factory->define(Employee::class, function (Faker $faker) {
    $users  = User::all();
    $roles  = Role::where('slug', '!=', 'admin')->get();
    $stores = Store::all();

    return [
        'user_id'    => $users[$faker->numberBetween(1, (count($users) - 1))]->id,
        'role_id'    => $roles[$faker->numberBetween(0, (count($roles) - 1))]->id,
        'store_id'   => $stores[$faker->numberBetween(0, (count($stores) - 1))]->id,
        'start_date' => $faker->dateTimeBetween('-5 years', 'now'),
        'end_date'   => $faker->dateTimeBetween('now', '+5 years'),
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});
