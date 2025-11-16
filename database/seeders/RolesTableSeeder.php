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
            ['name' => 'passenger', 'description' => 'Regular passenger', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'driver', 'description' => 'Driver with vehicle', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'clerk', 'description' => 'Clerk you have basic roles other then admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'admin', 'description' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
