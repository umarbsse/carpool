<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;







class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('roles')->insert([
            ['name' => 'Super Admin', 'description' => 'Super Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Admin', 'description' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finance', 'description' => 'Finance', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HR', 'description' => 'Humen resource', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Booking Manager', 'description' => 'Booking Manager', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ticket Booker', 'description' => 'Ticket Booker', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Passenger', 'description' => 'Passenger', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Driver', 'description' => 'Driver', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
