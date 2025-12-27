<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RidePaymentStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_status')->insert([
            ['name' => 'pending',           'description' => 'Payment not completed yet, waiting for confirmation.'],
            ['name' => 'completed',         'description' => 'Payment successfully received.'],
            ['name' => 'failed',            'description' => 'Payment attempt failed.'],
            ['name' => 'refunded',          'description' => 'Payment refunded to the customer.'],
            ['name' => 'cancelled',         'description' => 'Payment cancelled by user or system.'],
            ['name' => 'partially_refunded','description' => 'Only part of the payment was refunded.'],
            ['name' => 'processing',        'description' => 'Payment is being processed by the gateway.'],
        ]);
    }
}
