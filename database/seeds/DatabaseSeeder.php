<?php

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
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Information Technology',
            'slug'       => 'it',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Financial',
            'slug'       => 'financial',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Human Resources',
            'slug'       => 'hr',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Manager',
            'slug'       => 'manager',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name'       => 'Salesman',
            'slug'       => 'salesman',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Administrator
        $idUserAdmin = DB::table('users')->insertGetId([
            'name'              => 'Administrator',
            'email'             => 'admin@admin.local',
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'    => str_random(10),
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        $idCompany = DB::table('companies')->insertGetId([
            'name'       => 'Main Company',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $idStore = DB::table('stores')->insertGetId([
            'company_id' => $idCompany,
            'address'    => 'Main address, 00',
            'phone'      => '000',
            'home'       => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $idStore = DB::table('employees')->insertGetId([
            'user_id'    => $idUserAdmin,
            'role_id'    => $idRoleAdmin,
            'store_id'   => $idStore,
            'start_date' => now(),
            'end_date'   => now()->addYear(20),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
