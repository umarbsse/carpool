<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RolesTableSeeder::class,
            GeoLocationSeeder::class,
            ConfigTableSeeder::class,
            UsersTableSeeder::class,
            UsersPassengerTableSeeder::class,
            UsersDriverTableSeeder::class,
            VehicleTypesTableSeeder::class,
            VehicleTableSeeder::class,
            DriverVehicleTableSeeder::class,
        ]);
    }
}
