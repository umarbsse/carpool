<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ride_bookings', function (Blueprint $table) {
            $table->id();
            // Add foreign key separately
            $table->foreignId('ride_id')->constrained('ride', 'id')->cascadeOnDelete();
            $table->foreignId('passenger_id')->constrained('users_passenger', 'id')->cascadeOnDelete();
            $table->string('seat_no');
            $table->foreignId('booking_status')->constrained('ride_booking_status', 'id')->cascadeOnDelete();
            $table->foreignId('payment_status')->constrained('payment_status', 'id')->cascadeOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ride_bookings');
    }
};
