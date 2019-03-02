<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,     100 )->create();
        factory(App\Company::class,  1   )->create();
        factory(App\Store::class,    15  )->create();
        factory(App\Employee::class, 200 )->create();
        factory(App\Product::class,  500 )->create();
        factory(App\Sale::class,     1000)->create();
        factory(App\Cart::class,     400 )->create();
        factory(App\Customer::class, 400 )->create();
        factory(App\Delivery::class, 250 )->create();
        factory(App\Expense::class,  100 )->create();
        factory(App\Price::class,    200 )->create();
        factory(App\Supplier::class, 50  )->create();
        factory(App\Purchase::class, 500 )->create();
        factory(App\Salary::class,   50  )->create();
    }
}
