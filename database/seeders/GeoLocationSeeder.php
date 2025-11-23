<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        DB::table('geo_location')->insert([
            //Provines List
            ['name' => 'Punjab', 'province_name' => 'Punjab', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sindh', 'province_name' => 'Sindh', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khyber Pakhtunkhwa', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Balochistan', 'province_name' => 'Balochistan', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Islamabad Capital Territory', 'province_name' => 'Islamabad Capital Territory', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Azad Jammu & Kashmir', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'created_at' => $now, 'updated_at' => $now],


             //Punjab List
            ['name' => 'Attock, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Attock', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.7680, 'lng' => 72.3600, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bahawalnagar, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Bahawalnagar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.9826, 'lng' => 73.2475, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bahawalpur, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Bahawalpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.3956, 'lng' => 71.6836, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bhakkar, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Bhakkar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.6325, 'lng' => 71.0692, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chakwal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Chakwal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.9336, 'lng' => 72.8580, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chiniot, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Chiniot', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.7201, 'lng' => 72.9781, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dera Ghazi Khan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Dera Ghazi Khan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0500, 'lng' => 70.6333, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Faisalabad, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Faisalabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.4181, 'lng' => 73.0799, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gujranwala, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Gujranwala', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.1877, 'lng' => 74.1945, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gujrat, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Gujrat', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5736, 'lng' => 74.0788, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hafizabad, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Hafizabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.0726, 'lng' => 73.6850, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jhang, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Jhang', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.2695, 'lng' => 72.3169, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jhelum, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Jhelum', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.9333, 'lng' => 73.7333, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kasur, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Kasur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.1167, 'lng' => 74.4500, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khanewal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Khanewal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.3000, 'lng' => 71.9333, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khushab, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Khushab', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.2967, 'lng' => 72.3523, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lahore, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Lahore', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.5497, 'lng' => 74.3436, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Layyah, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Layyah', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.9640, 'lng' => 70.9340, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lodhran, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Lodhran', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.5370, 'lng' => 71.6330, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mandi Bahauddin, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Mandi Bahauddin', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5833, 'lng' => 73.4833, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mianwali, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Mianwali', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5833, 'lng' => 71.5333, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Multan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Multan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.1575, 'lng' => 71.5249, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Muzaffargarh, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Muzaffargarh', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0700, 'lng' => 71.1900, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nankana Sahib, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Nankana Sahib', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.4497, 'lng' => 73.7111, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Narowal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Narowal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.1000, 'lng' => 74.9000, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Okara, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Okara', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.8081, 'lng' => 73.4458, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pakpattan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Pakpattan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.3400, 'lng' => 73.4000, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rahim Yar Khan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Rahim Yar Khan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.4200, 'lng' => 70.3000, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rajanpur, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Rajanpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.1000, 'lng' => 70.3300, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rawalpindi, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Rawalpindi', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.6007, 'lng' => 73.0679, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sahiwal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sahiwal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.6667, 'lng' => 73.1000, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sargodha, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sargodha', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.0836, 'lng' => 72.6711, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sheikhupura, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sheikhupura', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.7131, 'lng' => 73.9783, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sialkot, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sialkot', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5000, 'lng' => 74.5333, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Toba Tek Singh, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Toba Tek Singh', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.9667, 'lng' => 72.4833, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vehari, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Vehari', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0460, 'lng' => 72.3520, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wazirabad, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Wazirabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.4450, 'lng' => 74.1110, 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
