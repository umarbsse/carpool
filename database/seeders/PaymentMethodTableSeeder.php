<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_method')->insert([
            ['name' => 'wallet',        'description' => 'In-app wallet balance payment'],
            ['name' => 'credit_card',   'description' => 'Credit card payment'],
            ['name' => 'debit_card',    'description' => 'Debit card payment'],
            ['name' => 'paypal',        'description' => 'PayPal online payment'],
            ['name' => 'stripe',        'description' => 'Stripe payment gateway'],
            ['name' => 'bank_transfer', 'description' => 'Direct bank transfer'],
            ['name' => 'cash',          'description' => 'Cash payment'],
            ['name' => 'easypaisa',     'description' => 'Easypaisa mobile wallet payment'],
            ['name' => 'jazzcash',      'description' => 'JazzCash mobile wallet payment'],
        ]);
    }
}
