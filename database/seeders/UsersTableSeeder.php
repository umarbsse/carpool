<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('users')->insert([
            [
                'first_name' => 'Umer', 
                'last_name' => 'Shahzad',
                'cnic' => '12345-1234567-1',
                'email' => 'admin@gmail.com',
                'mobile' => '03652365877', 
                'password' => Hash::make('admin'), 
                'created_at' => now(), 
                'updated_at' => now()],
        ]);
    }
}
