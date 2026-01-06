<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Vehicle_reg_geo_locations_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $provinces = [
            ['name' => 'Punjab', 'province_name' => 'Punjab', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 2, 'lat' => 31.1704, 'lng' => 72.7097, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sindh', 'province_name' => 'Sindh', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 2, 'lat' => 25.0961, 'lng' => 68.9753, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khyber Pakhtunkhwa', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 2, 'lat' => 34.9526, 'lng' => 72.3311, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Balochistan', 'province_name' => 'Balochistan', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 2, 'lat' => 28.0000, 'lng' => 66.6167, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Islamabad Capital Territory', 'province_name' => 'Islamabad Capital Territory', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 2, 'lat' => 33.6844, 'lng' => 73.0479, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 2, 'lat' => 35.9200, 'lng' => 74.3133, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Azad Jammu & Kashmir', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 2, 'lat' => 34.0833, 'lng' => 73.9146, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('vehicles_reg_geo_locations')->insert($provinces);
    }
}
