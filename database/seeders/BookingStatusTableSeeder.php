<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ride_booking_status')->insert([
            ['name' => 'pending',      'description' => 'Booking initiated but not confirmed yet (e.g., payment pending).'],
            ['name' => 'confirmed',    'description' => 'Payment successful, seat reserved.'],
            ['name' => 'cancelled',    'description' => 'Booking cancelled by user or airline.'],
            ['name' => 'checked_in',   'description' => 'Passenger has completed online check-in.'],
            ['name' => 'boarded',      'description' => 'Passenger has boarded the flight.'],
            ['name' => 'completed',    'description' => 'Flight completed successfully.'],
            ['name' => 'no_show',      'description' => 'Passenger did not show up for the flight.'],
            ['name' => 'refunded',     'description' => 'Payment refunded after cancellation.'],
            ['name' => 'waitlisted',   'description' => 'Flight is full; booking is on waiting list.'],
            ['name' => 'rescheduled',  'description' => 'Flight date/time changed.'],
        ]);
    }
}
