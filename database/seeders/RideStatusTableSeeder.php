<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RideStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('ride_status')->insert([
            ['name' => 'scheduled', 'description' => 'scheduled', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'started', 'description' => 'started', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'in_progress', 'description' => 'in_progress', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'completed', 'description' => 'completed', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'cancelled', 'description' => 'cancelled', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
