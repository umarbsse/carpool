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
        Schema::create('ride', function (Blueprint $table) {
            $table->id();
            // Add foreign key separately
            $table->foreignId('location_start')->constrained('geo_location', 'id')->cascadeOnDelete();
            $table->foreignId('location_end')->constrained('geo_location', 'id')->cascadeOnDelete();
            $table->tinyInteger('max_seats');
            $table->tinyInteger('availble_seats');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->foreignId('driver_id')->constrained('users_driver', 'id')->cascadeOnDelete();
            $table->foreignId('vehicle_id')->constrained('vehicles', 'id')->cascadeOnDelete();
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
        Schema::dropIfExists('ride');
    }
};
