<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeoLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $provinces = [
            ['name' => 'Punjab', 'province_name' => 'Punjab', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'lat' => 31.1704, 'lng' => 72.7097, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sindh', 'province_name' => 'Sindh', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'lat' => 25.0961, 'lng' => 68.9753, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khyber Pakhtunkhwa', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'lat' => 34.9526, 'lng' => 72.3311, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Balochistan', 'province_name' => 'Balochistan', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'lat' => 28.0000, 'lng' => 66.6167, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Islamabad Capital Territory', 'province_name' => 'Islamabad Capital Territory', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'lat' => 33.6844, 'lng' => 73.0479, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'lat' => 35.9200, 'lng' => 74.3133, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Azad Jammu & Kashmir', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => null, 'tehsil_name' => null, 'location_type' => 1, 'is_enable' => 1, 'lat' => 34.0833, 'lng' => 73.9146, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($provinces);
        // Punjab Districts
        $punjab_districts = [
            ['name' => 'Attock, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Attock', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.7680, 'lng' => 72.3600, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bahawalnagar, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Bahawalnagar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.9826, 'lng' => 73.2475, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bahawalpur, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Bahawalpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.3956, 'lng' => 71.6836, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bhakkar, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Bhakkar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.6325, 'lng' => 71.0692, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chiniot, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Chiniot', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.7201, 'lng' => 72.9781, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chakwal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Chakwal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.9336, 'lng' => 72.8580, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dera Ghazi Khan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Dera Ghazi Khan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0500, 'lng' => 70.6333, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Faisalabad, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Faisalabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.4181, 'lng' => 73.0799, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gujranwala, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Gujranwala', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.1877, 'lng' => 74.1945, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gujrat, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Gujrat', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5736, 'lng' => 74.0788, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hafizabad, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Hafizabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.0726, 'lng' => 73.6850, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jhang, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Jhang', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 2, 'lat' => 31.2695, 'lng' => 72.3169, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jhelum, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Jhelum', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.9333, 'lng' => 73.7333, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kasur, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Kasur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.1167, 'lng' => 74.4500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khanewal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Khanewal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.3000, 'lng' => 71.9333, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khushab, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Khushab', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.2967, 'lng' => 72.3523, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lahore, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Lahore', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 2, 'lat' => 31.5497, 'lng' => 74.3436, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Layyah, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Layyah', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.9640, 'lng' => 70.9340, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lodhran, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Lodhran', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.5370, 'lng' => 71.6330, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mandi Bahauddin, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Mandi Bahauddin', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5833, 'lng' => 73.4833, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mianwali, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Mianwali', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5833, 'lng' => 71.5333, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Multan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Multan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.1575, 'lng' => 71.5249, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Muzaffargarh, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Muzaffargarh', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0700, 'lng' => 71.1900, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nankana Sahib, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Nankana Sahib', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.4497, 'lng' => 73.7111, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Narowal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Narowal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.1000, 'lng' => 74.9000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Okara, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Okara', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.8081, 'lng' => 73.4458, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pakpattan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Pakpattan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.3400, 'lng' => 73.4000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rahim Yar Khan, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Rahim Yar Khan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.4200, 'lng' => 70.3000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rajanpur, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Rajanpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.1000, 'lng' => 70.3300, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rawalpindi, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Rawalpindi', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 2, 'lat' => 33.6007, 'lng' => 73.0679, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sahiwal, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sahiwal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.6667, 'lng' => 73.1000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sargodha, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sargodha', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.0836, 'lng' => 72.6711, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sheikhupura, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sheikhupura', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.7131, 'lng' => 73.9783, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sialkot, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Sialkot', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.5000, 'lng' => 74.5333, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Toba Tek Singh, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Toba Tek Singh', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.9667, 'lng' => 72.4833, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vehari, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Vehari', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0460, 'lng' => 72.3520, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wazirabad, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Wazirabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.4450, 'lng' => 74.1110, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Taunsa, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Taunsa', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.5200, 'lng' => 70.6500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kot Addu, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Kot Addu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.4700, 'lng' => 70.9600, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Talagang, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Talagang', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.9270, 'lng' => 72.4159, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Murree, Punjab', 'province_name' => 'Punjab', 'district_name' => 'Murree', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.9070, 'lng' => 73.3903, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($punjab_districts);
        // Sindh Districts
        $districts_sindh = [
            ['name' => 'Karachi East, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi East', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.8950, 'lng' => 67.1220, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Karachi West, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi West', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.8610, 'lng' => 66.9900, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Karachi Central, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi Central', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.9110, 'lng' => 67.0650, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Karachi South, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi South', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.8600, 'lng' => 67.0100, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hyderabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Hyderabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.3960, 'lng' => 68.3578, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sukkur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Sukkur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.7050, 'lng' => 68.8570, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Larkana, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Larkana', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.5600, 'lng' => 68.2120, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shaheed Benazirabad (Nawabshah), Sindh', 'province_name' => 'Sindh', 'district_name' => 'Shaheed Benazirabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 26.2440, 'lng' => 68.4090, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mirpur Khas, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Mirpur Khas', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.5290, 'lng' => 69.0020, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tando Allahyar, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Tando Allahyar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.4630, 'lng' => 68.7170, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tando Muhammad Khan, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Tando Muhammad Khan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.1330, 'lng' => 68.5360, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Badin, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Badin', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.6510, 'lng' => 68.8370, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thatta, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Thatta', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.7470, 'lng' => 67.9230, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sanghar, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Sanghar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 26.0460, 'lng' => 68.9490, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shikarpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Shikarpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.9570, 'lng' => 68.6380, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jacobabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jacobabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.2810, 'lng' => 68.4370, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Umerkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Umerkot', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.3560, 'lng' => 69.7340, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.5290, 'lng' => 68.7610, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jamshoro, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jamshoro', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.4330, 'lng' => 68.3030, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dadu, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Dadu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 26.7300, 'lng' => 67.7760, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.3460, 'lng' => 68.1260, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Benazirabad (Nawabshah), Sindh', 'province_name' => 'Sindh', 'district_name' => 'Shaheed Benazirabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 26.2440, 'lng' => 68.4090, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Naushahro Feroze, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Naushahro Feroze', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 26.8450, 'lng' => 68.1100, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sujawal, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Sujawal', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.8500, 'lng' => 67.9930, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Matli, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Matli', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.1750, 'lng' => 68.6230, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tharparkar, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Tharparkar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.1750, 'lng' => 69.5280, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Badin, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Badin', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 24.6510, 'lng' => 68.8370, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($districts_sindh);
        // KP Districts
        $districts_kpk = [
            ['name' => 'Abbottabad, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Abbottabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.1463, 'lng' => 73.2110, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bannu, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Bannu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.9850, 'lng' => 70.6050, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Battagram, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Battagram', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.6717, 'lng' => 73.0260, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Buner, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Buner', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.5333, 'lng' => 72.5333, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Charsadda, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Charsadda', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.1500, 'lng' => 71.7400, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chitral, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Chitral', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.8514, 'lng' => 71.8126, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dera Ismail Khan, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Dera Ismail Khan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.8320, 'lng' => 70.9025, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Central Dir, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Central Dir', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.0300, 'lng' => 71.8800, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lower Dir, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Lower Dir', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.0700, 'lng' => 71.8400, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Upper Dir, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Upper Dir', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.1900, 'lng' => 71.8800, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hangu, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Hangu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.5290, 'lng' => 71.0667, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Haripur, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Haripur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.9950, 'lng' => 72.9340, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kohat, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Kohat', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.5810, 'lng' => 71.4490, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khyber, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Khyber', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.9930, 'lng' => 71.4200, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lakki Marwat, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Lakki Marwat', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.6080, 'lng' => 70.9120, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Malakand, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Malakand', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.5200, 'lng' => 71.9000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mansehra, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Mansehra', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.3330, 'lng' => 73.2090, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mardan, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Mardan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.1980, 'lng' => 72.0450, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mohmand, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Mohmand', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.5170, 'lng' => 71.5170, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nowshera, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Nowshera', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.9870, 'lng' => 71.9940, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Peshawar, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Peshawar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.0151, 'lng' => 71.5249, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shangla, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Shangla', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.8760, 'lng' => 72.6350, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Swabi, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Swabi', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.1160, 'lng' => 72.4740, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Swat, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Swat', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.2150, 'lng' => 72.4250, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tank, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Tank', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.2200, 'lng' => 70.3760, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Torghar, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Torghar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.8670, 'lng' => 73.4620, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Upper Chitral, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Upper Chitral', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.9000, 'lng' => 71.8000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lower Chitral, KP', 'province_name' => 'Khyber Pakhtunkhwa', 'district_name' => 'Lower Chitral', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.7000, 'lng' => 71.8000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($districts_kpk);
        // Balochistan Districts

        $districts_balochistan = [
            ['name' => 'Awaran, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Awaran', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 26.4600, 'lng' => 65.3200, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Barkhan, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Barkhan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.9000, 'lng' => 69.5833, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chagai, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Chagai', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.0370, 'lng' => 64.7690, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chaman, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Chaman', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.9180, 'lng' => 66.4500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dera Bugti, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Dera Bugti', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.0333, 'lng' => 69.3333, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Duki, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Duki', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0280, 'lng' => 69.3340, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gwadar, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Gwadar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.1260, 'lng' => 62.3250, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Harnai, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Harnai', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.0000, 'lng' => 68.6000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jafarabad, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Jafarabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.3667, 'lng' => 68.7667, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jhal Magsi, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Jhal Magsi', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.5000, 'lng' => 68.1667, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kachhi (Bolan), Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Kachhi', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.5000, 'lng' => 67.5000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kalat, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Kalat', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.0200, 'lng' => 66.6000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kech (Turbat), Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Kech', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.4230, 'lng' => 63.3540, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kharan, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Kharan', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.5833, 'lng' => 65.4167, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khuzdar, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Khuzdar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.8100, 'lng' => 66.6100, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Killa Abdullah, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Killa Abdullah', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.6800, 'lng' => 66.9300, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kohlu, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Kohlu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.9150, 'lng' => 69.0000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lasbela, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Lasbela', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 25.8000, 'lng' => 66.5500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Loralai, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Loralai', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.3700, 'lng' => 68.5800, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mastung, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Mastung', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.8000, 'lng' => 66.8500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Musakhel, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Musakhel', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.3500, 'lng' => 69.0700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Naseerabad, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Naseerabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.9650, 'lng' => 68.1000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nushki, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Nushki', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.5300, 'lng' => 66.0700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Panjgur, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Panjgur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 26.9690, 'lng' => 64.1200, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pishin, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Pishin', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.5800, 'lng' => 67.0000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Qilla Saifullah, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Qilla Saifullah', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.6400, 'lng' => 66.9800, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Quetta, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Quetta', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.1798, 'lng' => 66.9750, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sherani, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Sherani', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.4000, 'lng' => 67.0000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sibi, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Sibi', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 29.5410, 'lng' => 67.8750, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sohbatpur, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Sohbatpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.0167, 'lng' => 68.2000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Surab, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Surab', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.7800, 'lng' => 66.0500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Washuk, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Washuk', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 27.8000, 'lng' => 65.4500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Zhob, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Zhob', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 31.3400, 'lng' => 69.4500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ziarat, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Ziarat', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 30.3810, 'lng' => 67.7240, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Usta Muhammad, Balochistan', 'province_name' => 'Balochistan', 'district_name' => 'Usta Muhammad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 28.1167, 'lng' => 67.2320, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($districts_balochistan);
        // Islamabad Districts

        $islamabad = [
            ['name' => 'Islamabad', 'province_name' => 'Islamabad Capital Territory', 'district_name' => 'Islamabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.6844, 'lng' => 73.0479, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($islamabad);
        // Gilgit-Baltistan Districts

        $gilgit_baltistan = [
            ['name' => 'Gilgit, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Gilgit', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.9200, 'lng' => 74.3100, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Skardu, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Skardu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.3300, 'lng' => 75.6300, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diamer, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Diamer', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.2500, 'lng' => 74.8700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Astore, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Astore', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.3300, 'lng' => 74.5500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ghizer, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Ghizer', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 36.1500, 'lng' => 73.8000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hunza, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Hunza', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 36.3333, 'lng' => 74.6500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => ' Nagar, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Nagar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 36.4500, 'lng' => 74.7500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shigar, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Shigar', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.4300, 'lng' => 75.3300, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ghanche, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Ghanche', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.1200, 'lng' => 76.2400, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Skardu, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Skardu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.3300, 'lng' => 75.6300, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gilgit, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Gilgit', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.9200, 'lng' => 74.3100, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bagrot, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Bagrot', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.9500, 'lng' => 74.8000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tangir, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Tangir', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.6500, 'lng' => 73.7500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Roundu, Gilgit-Baltistan', 'province_name' => 'Gilgit-Baltistan', 'district_name' => 'Roundu', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 35.3000, 'lng' => 76.2500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($gilgit_baltistan);
        // Azad Jammu & Kashmir Districts
        $ajk = [
            ['name' => 'Muzaffarabad, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Muzaffarabad', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.3700, 'lng' => 73.4700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Neelum, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Neelum', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.6200, 'lng' => 73.7500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bagh, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Bagh', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.9800, 'lng' => 73.7700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Poonch, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Poonch', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.7700, 'lng' => 73.8900, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Haveli, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Haveli', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.7600, 'lng' => 73.7700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kotli, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Kotli', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.5200, 'lng' => 73.9100, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mirpur, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Mirpur', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.1500, 'lng' => 73.7500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bhimber, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Bhimber', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 32.9700, 'lng' => 74.0800, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hattian, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Hattian', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 34.0500, 'lng' => 73.7700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bagh, AJK', 'province_name' => 'Azad Jammu & Kashmir', 'district_name' => 'Bagh', 'tehsil_name' => null, 'location_type' => 2, 'is_enable' => 1, 'lat' => 33.9800, 'lng' => 73.7700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('geo_location')->insert($gilgit_baltistan);    
        
        
        // Punjab Tehsile List
       

        $punjab_tehsile = [
            // Attock
            ['name' => 'Attock', 'district_name' => 'Attock', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hassanabdal', 'district_name' => 'Attock', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fateh Jang', 'district_name' => 'Attock', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jand', 'district_name' => 'Attock', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pindi Gheb', 'district_name' => 'Attock', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hazro', 'district_name' => 'Attock', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Bahawalpur
            ['name' => 'Bahawalpur City', 'district_name' => 'Bahawalpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bahawalpur Saddar', 'district_name' => 'Bahawalpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ahmadpur East', 'district_name' => 'Bahawalpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hasilpur', 'district_name' => 'Bahawalpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Yazman', 'district_name' => 'Bahawalpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khairpur Tamewali', 'district_name' => 'Bahawalpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Bahawalnagar
            ['name' => 'Bahawalnagar', 'district_name' => 'Bahawalnagar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chishtian', 'district_name' => 'Bahawalnagar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Fort Abbas', 'district_name' => 'Bahawalnagar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Haroonabad', 'district_name' => 'Bahawalnagar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Minchinabad', 'district_name' => 'Bahawalnagar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Bhakkar
            ['name' => 'Bhakkar', 'district_name' => 'Bhakkar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Darya Khan', 'district_name' => 'Bhakkar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mankera', 'district_name' => 'Bhakkar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kaloorkot', 'district_name' => 'Bhakkar', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Chakwal
            ['name' => 'Chakwal', 'district_name' => 'Chakwal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Choa Saidan Shah', 'district_name' => 'Chakwal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kallar Kahar', 'district_name' => 'Chakwal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Chiniot
            ['name' => 'Chiniot', 'district_name' => 'Chiniot', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bhowana', 'district_name' => 'Chiniot', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lalian', 'district_name' => 'Chiniot', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Dera Ghazi Khan
            ['name' => 'Dera Ghazi Khan', 'district_name' => 'Dera Ghazi Khan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kot Chutta', 'district_name' => 'Dera Ghazi Khan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Faisalabad
            ['name' => 'Faisalabad City', 'district_name' => 'Faisalabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Faisalabad Saddar', 'district_name' => 'Faisalabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jaranwala', 'district_name' => 'Faisalabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Samundri', 'district_name' => 'Faisalabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tandlianwala', 'district_name' => 'Faisalabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chak Jhumra', 'district_name' => 'Faisalabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Gujranwala
            ['name' => 'Gujranwala City', 'district_name' => 'Gujranwala', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gujranwala Saddar', 'district_name' => 'Gujranwala', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kamoke', 'district_name' => 'Gujranwala', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Naushehra Virkan', 'district_name' => 'Gujranwala', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Gujrat
            ['name' => 'Gujrat', 'district_name' => 'Gujrat', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kharian', 'district_name' => 'Gujrat', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sarai Alamgir', 'district_name' => 'Gujrat', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jalalpur Jattan', 'district_name' => 'Gujrat', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kunjah', 'district_name' => 'Gujrat', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],


            // Hafizabad
            ['name' => 'Hafizabad', 'district_name' => 'Hafizabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pindi Bhattian', 'district_name' => 'Hafizabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Jhang
            ['name' => 'Jhang', 'district_name' => 'Jhang', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shorkot', 'district_name' => 'Jhang', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ahmad Pur Sial', 'district_name' => 'Jhang', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '18-Hazari', 'district_name' => 'Jhang', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Jhelum
            ['name' => 'Jhelum', 'district_name' => 'Jhelum', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pind Dadan Khan', 'district_name' => 'Jhelum', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sohawa', 'district_name' => 'Jhelum', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dina', 'district_name' => 'Jhelum', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Kasur
            ['name' => 'Kasur', 'district_name' => 'Kasur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kot Radha Kishan', 'district_name' => 'Kasur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chunian', 'district_name' => 'Kasur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pattoki', 'district_name' => 'Kasur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Khanewal
            ['name' => 'Khanewal', 'district_name' => 'Khanewal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mian Channu', 'district_name' => 'Khanewal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kabirwala', 'district_name' => 'Khanewal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jahanian', 'district_name' => 'Khanewal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Khushab
            ['name' => 'Khushab', 'district_name' => 'Khushab', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Noorpur Thal', 'district_name' => 'Khushab', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Quaidabad', 'district_name' => 'Khushab', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Lahore
            ['name' => 'Lahore City', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Model Town', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Raiwind', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shalimar', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nishtar', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wagha', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Allama Iqbal', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Saddar', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ravi', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cantt', 'district_name' => 'Lahore', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],


            // Layyah
            ['name' => 'Layyah', 'district_name' => 'Layyah', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Karor Lal Esan', 'district_name' => 'Layyah', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chaubara', 'district_name' => 'Layyah', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Lodhran
            ['name' => 'Lodhran', 'district_name' => 'Lodhran', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dunyapur', 'district_name' => 'Lodhran', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kahror Pacca', 'district_name' => 'Lodhran', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Mandi Bahauddin
            ['name' => 'Mandi Bahauddin', 'district_name' => 'Mandi Bahauddin', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Phalia', 'district_name' => 'Mandi Bahauddin', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Malakwal', 'district_name' => 'Mandi Bahauddin', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Mianwali
            ['name' => 'Mianwali', 'district_name' => 'Mianwali', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Isakhel', 'district_name' => 'Mianwali', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Piplan', 'district_name' => 'Mianwali', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Multan
            ['name' => 'Multan City', 'district_name' => 'Multan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Multan Saddar', 'district_name' => 'Multan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shujabad', 'district_name' => 'Multan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jalalpur Pirwala', 'district_name' => 'Multan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Murree
            ['name' => 'Murree', 'district_name' => 'Murree', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kotli Sattian', 'district_name' => 'Murree', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Muzaffargarh
            ['name' => 'Muzaffargarh', 'district_name' => 'Muzaffargarh', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Alipur', 'district_name' => 'Muzaffargarh', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jatoi', 'district_name' => 'Muzaffargarh', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],


            // Narowal
            ['name' => 'Narowal', 'district_name' => 'Narowal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shakargarh', 'district_name' => 'Narowal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Zafarwal', 'district_name' => 'Narowal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Nankana Sahib
            ['name' => 'Nankana Sahib', 'district_name' => 'Nankana Sahib', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shahkot', 'district_name' => 'Nankana Sahib', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sangla Hill', 'district_name' => 'Nankana Sahib', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Okara
            ['name' => 'Okara', 'district_name' => 'Okara', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Depalpur', 'district_name' => 'Okara', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Renala Khurd', 'district_name' => 'Okara', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Pakpattan
            ['name' => 'Pakpattan', 'district_name' => 'Pakpattan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Arifwala', 'district_name' => 'Pakpattan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Rahim Yar Khan
            ['name' => 'Rahim Yar Khan', 'district_name' => 'Rahim Yar Khan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khanpur', 'district_name' => 'Rahim Yar Khan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Liaquatpur', 'district_name' => 'Rahim Yar Khan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sadiqabad', 'district_name' => 'Rahim Yar Khan', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Rajanpur
            ['name' => 'Rajanpur', 'district_name' => 'Rajanpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jampur', 'district_name' => 'Rajanpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rojhan', 'district_name' => 'Rajanpur', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],


            // Rawalpindi
            ['name' => 'Rawalpindi City', 'district_name' => 'Rawalpindi', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rawalpindi Cantt', 'district_name' => 'Rawalpindi', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gujar Khan', 'district_name' => 'Rawalpindi', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Taxila', 'district_name' => 'Rawalpindi', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kahuta', 'district_name' => 'Rawalpindi', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kallar Syedan', 'district_name' => 'Rawalpindi', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Sahiwal
            ['name' => 'Sahiwal', 'district_name' => 'Sahiwal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chichawatni', 'district_name' => 'Sahiwal', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Sargodha
            ['name' => 'Sargodha', 'district_name' => 'Sargodha', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bhalwal', 'district_name' => 'Sargodha', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bhera', 'district_name' => 'Sargodha', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kot Momin', 'district_name' => 'Sargodha', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shahpur', 'district_name' => 'Sargodha', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sillanwali', 'district_name' => 'Sargodha', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Sheikhupura
            ['name' => 'Sheikhupura', 'district_name' => 'Sheikhupura', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ferozewala', 'district_name' => 'Sheikhupura', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Muridke', 'district_name' => 'Sheikhupura', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Safdarabad', 'district_name' => 'Sheikhupura', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sharaqpur', 'district_name' => 'Sheikhupura', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Sialkot
            ['name' => 'Sialkot', 'district_name' => 'Sialkot', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Daska', 'district_name' => 'Sialkot', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pasrur', 'district_name' => 'Sialkot', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sambrial', 'district_name' => 'Sialkot', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Toba Tek Singh
            ['name' => 'Toba Tek Singh', 'district_name' => 'Toba Tek Singh', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gojra', 'district_name' => 'Toba Tek Singh', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kamalia', 'district_name' => 'Toba Tek Singh', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pir Mahal', 'district_name' => 'Toba Tek Singh', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Vehari
            ['name' => 'Vehari', 'district_name' => 'Vehari', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Burewala', 'district_name' => 'Vehari', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mailsi', 'district_name' => 'Vehari', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Wazirabad
            ['name' => 'Wazirabad', 'district_name' => 'Wazirabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Alipur Chatha', 'district_name' => 'Wazirabad', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Talagang
            ['name' => 'Talagang', 'district_name' => 'Talagang', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Lawa', 'district_name' => 'Talagang', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Taunsa
            ['name' => 'Taunsa', 'district_name' => 'Taunsa', 'province_name' => 'Punjab', 'location_type' => 3, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now]
        ];
        DB::table('geo_location')->insert($punjab_tehsile);



        $sindh_tehsile = [
            // Badin District
            ['name' => 'Badin, Badin, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Badin', 'tehsil_name' => 'Badin', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Matli, Badin, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Badin', 'tehsil_name' => 'Matli', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shaheed Fazal Rahu, Badin, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Badin', 'tehsil_name' => 'Shaheed Fazal Rahu', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Talhar, Badin, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Badin', 'tehsil_name' => 'Talhar', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tando Bago, Badin, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Badin', 'tehsil_name' => 'Tando Bago', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Dadu District
            ['name' => 'Dadu, Dadu, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Dadu', 'tehsil_name' => 'Dadu', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Johi, Dadu, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Dadu', 'tehsil_name' => 'Johi', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Khairpur Nathan Shah, Dadu, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Dadu', 'tehsil_name' => 'Khairpur Nathan Shah', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mehar, Dadu, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Dadu', 'tehsil_name' => 'Mehar', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

           
            // Hyderabad District
            ['name' => 'Hyderabad City, Hyderabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Hyderabad', 'tehsil_name' => 'Hyderabad City', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hyderabad Saddar, Hyderabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Hyderabad', 'tehsil_name' => 'Hyderabad Saddar', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Latifabad, Hyderabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Hyderabad', 'tehsil_name' => 'Latifabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Qasimabad, Hyderabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Hyderabad', 'tehsil_name' => 'Qasimabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

           
            // Jacobabad District
            ['name' => 'Jacobabad, Jacobabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jacobabad', 'tehsil_name' => 'Jacobabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => 28.2810, 'lng' => 68.4383, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Garhi Khairo, Jacobabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jacobabad', 'tehsil_name' => 'Garhi Khairo', 'location_type' => 3, 'is_enable' => 1, 'lat' => 28.2200, 'lng' => 68.7400, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thul, Jacobabad, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jacobabad', 'tehsil_name' => 'Thul', 'location_type' => 3, 'is_enable' => 1, 'lat' => 28.2167, 'lng' => 68.7833, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],


           
            // Jamshoro District
            ['name' => 'Kotri, Jamshoro, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jamshoro', 'tehsil_name' => 'Kotri', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sehwan, Jamshoro, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jamshoro', 'tehsil_name' => 'Sehwan', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Manjhand, Jamshoro, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jamshoro', 'tehsil_name' => 'Manjhand', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thana Bula Khan, Jamshoro, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Jamshoro', 'tehsil_name' => 'Thana Bula Khan', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],


            // Kamber Shahdadkot District
            ['name' => 'Qambar, Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => 'Qambar', 'location_type' => 3, 'is_enable' => 1, 'lat' => 27.8000, 'lng' => 68.1200, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shahdadkot, Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => 'Shahdadkot', 'location_type' => 3, 'is_enable' => 1, 'lat' => 27.8700, 'lng' => 67.9500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Miro Khan, Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => 'Miro Khan', 'location_type' => 3, 'is_enable' => 1, 'lat' => 27.9100, 'lng' => 68.0500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nasirabad, Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => 'Nasirabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => 27.9200, 'lng' => 68.0800, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Qubo Saeed Khan, Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => 'Qubo Saeed Khan', 'location_type' => 3, 'is_enable' => 1, 'lat' => 27.9400, 'lng' => 68.1000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sijawal Junejo, Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => 'Sijawal Junejo', 'location_type' => 3, 'is_enable' => 1, 'lat' => 27.9600, 'lng' => 68.1200, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Warah, Kamber Shahdadkot, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Kamber Shahdadkot', 'tehsil_name' => 'Warah', 'location_type' => 3, 'is_enable' => 1, 'lat' => 27.9800, 'lng' => 68.1400, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

            // Karachi Central District
            ['name' => 'North Nazimabad, Karachi Central, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi Central', 'tehsil_name' => 'North Nazimabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9300, 'lng' => 67.0500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Liaquatabad, Karachi Central, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi Central', 'tehsil_name' => 'Liaquatabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.8900, 'lng' => 67.0500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gulberg, Karachi Central, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi Central', 'tehsil_name' => 'Gulberg', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9100, 'lng' => 67.0500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'New Karachi, Karachi Central, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi Central', 'tehsil_name' => 'New Karachi', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9700, 'lng' => 67.0500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

           
            // Karachi East District

            ['name' => 'Gulshan-e-Iqbal, Karachi East, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi East', 'tehsil_name' => 'Gulshan-e-Iqbal', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9100, 'lng' => 67.1400, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jamshed, Karachi East, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi East', 'tehsil_name' => 'Jamshed', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.8600, 'lng' => 67.0800, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ferozabad, Karachi East, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi East', 'tehsil_name' => 'Ferozabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.8900, 'lng' => 67.1200, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],


           
            // Karachi West District
            ['name' => 'Orangi, Karachi West, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi West', 'tehsil_name' => 'Orangi', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9500, 'lng' => 66.9700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mominabad, Karachi West, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi West', 'tehsil_name' => 'Mominabad', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9300, 'lng' => 66.9500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gadap, Karachi West, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi West', 'tehsil_name' => 'Gadap', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9900, 'lng' => 66.9300, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

           
            // Karachi South District

            ['name' => 'Saddar, Karachi South, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi South', 'tehsil_name' => 'Saddar', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.8600, 'lng' => 67.0200, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Clifton, Karachi South, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi South', 'tehsil_name' => 'Clifton', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.8200, 'lng' => 67.0300, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Defence, Karachi South, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi South', 'tehsil_name' => 'Defence', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.8200, 'lng' => 67.0700, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

           
            // Karachi District
            ['name' => 'Malir, Karachi Malir, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi Malir', 'tehsil_name' => 'Malir', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.9500, 'lng' => 67.2000, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bin Qasim, Karachi Malir, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Karachi Malir', 'tehsil_name' => 'Bin Qasim', 'location_type' => 3, 'is_enable' => 1, 'lat' => 24.8000, 'lng' => 67.2500, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],



            // Khairpur District (from LandOfPurePeople) :contentReference[oaicite:2]{index=2}  
            ['name' => 'Faiz Ganj, Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => 'Faiz Ganj', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gambat, Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => 'Gambat', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kingri, Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => 'Kingri', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kot Diji, Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => 'Kot Diji', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nara, Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => 'Nara', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sobho Dero, Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => 'Sobho Dero', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thari Mirwah, Khairpur, Sindh', 'province_name' => 'Sindh', 'district_name' => 'Khairpur', 'tehsil_name' => 'Thari Mirwah', 'location_type' => 3, 'is_enable' => 1, 'lat' => null, 'lng' => null, 'disable_reason' => null, 'created_at' => $now, 'updated_at' => $now],

        ];
        DB::table('geo_location')->insert($sindh_tehsile);

        



    }
}
