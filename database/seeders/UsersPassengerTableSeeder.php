<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersPassengerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users_passenger')->insert([
            [
                'first_name' => 'Umer', 
                'last_name' => 'Shahzad',
                'cnic' => '12345-1234567-1',
                'email' => 'passenger@gmail.com',
                'mobile' => '0365-2365877', 
                'password' => Hash::make('passenger'), 
                'created_at' => now(), 
                'updated_at' => now()],
        ]);
    }
}
