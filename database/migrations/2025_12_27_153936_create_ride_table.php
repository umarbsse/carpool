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
            $table->unsignedInteger('location_start');
            $table->unsignedInteger('location_end');
            $table->tinyInteger('max_seats');
            $table->tinyInteger('availble_seats');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->bigInteger('driver_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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
