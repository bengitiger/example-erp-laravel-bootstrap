<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $idRoleAdmin = DB::table('roles')->insertGetId([
            'name'       => 'Administrator',
            'slug'       => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Information Technology',
            'slug'       => 'it',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Financial',
            'slug'       => 'financial',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Human Resources',
            'slug'       => 'hr',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Manager',
            'slug'       => 'manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Salesman',
            'slug'       => 'salesman',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Administrator
        $idUserAdmin = DB::table('users')->insertGetId([
            'name'              => 'Administrator',
            'email'             => 'admin@admin.local',
            'email_verified_at' => now(),
            'password'          => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token'    => str_random(10),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        $idCompany = DB::table('companies')->insertGetId([
            'name'       => 'Main Company',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $idStore = DB::table('stores')->insertGetId([
            'company_id' => $idCompany,
            'address'    => 'Main address, 00',
            'phone'      => '000',
            'home'       => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $idStore = DB::table('employees')->insertGetId([
            'user_id'    => $idUserAdmin,
            'role_id'    => $idRoleAdmin,
            'store_id'   => $idStore,
            'start_date' => Carbon::now(),
            'end_date'   => Carbon::now()->addYear(20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
