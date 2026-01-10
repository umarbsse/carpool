<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DriverVehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
         DB::table('driver_vehicles')->insert([
            [
                'driver_id' => 1,  
                'vehicle_id' => 1, 
                'reg_province' => 1, 
                'manufactor_year' => '2018',
                'reg_year' => '2018',
                'reg_number' => 'AXA-164',
            ],
        ]);
        
    }
}
