<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('vehicles_types')->insert([
            [
                'name' => 'Sedan',
                'is_enable' => 2,
            ],
            [
                'name' => 'Hatchback',
                'is_enable' => 2,
            ],
            [
                'name' => 'Coupe',
                'is_enable' => 2,
            ],
            [
                'name' => 'SUV',
                'is_enable' => 2,
            ],
            [
                'name' => 'Van',
                'is_enable' => 1,
            ],
            [
                'name' => 'Minivan',
                'is_enable' => 1,
            ],
            [
                'name' => 'Bus',
                'is_enable' => 1,
            ],

        ]);
    }
}
