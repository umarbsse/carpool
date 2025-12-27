<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('vehicles')->insert([
            [
                'make' => 'Honda', 
                'model' => 'City',
                'version' => '1.3 i-VTEC',
                'is_enable' => 2, 
                'type' => 1, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'make' => 'Honda', 
                'model' => 'City',
                'version' => ' 1.3 i-VTEC Prosmatec',
                'is_enable' => 2, 
                'type' => 1,                 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'make' => 'Honda', 
                'model' => 'City',
                'version' => '1.5 i-VTEC',
                'is_enable' => 2, 
                'type' => 1, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'make' => 'Honda', 
                'model' => 'City',
                'version' => '1.5 i-VTEC Prosmatec',
                'is_enable' => 2, 
                'type' => 1, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }
}
