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
        Schema::create('driver_vehicles', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            // Add foreign key separately
            $table->foreignId('driver_id')->constrained('users_driver', 'id')->cascadeOnDelete();
            // Add foreign key separately
            $table->foreignId('vehicle_id')->constrained('vehicles', 'id')->cascadeOnDelete();
            $table->text('manufactor_year')->nullable();
            $table->text('reg_year')->nullable();
            $table->text('vehicle_images')->nullable();
            // Add foreign key separately
            $table->foreignId('reg_province')->constrained('vehicles_reg_geo_locations', 'id')->cascadeOnDelete();
            //$table->text('reg_province')->nullable();
            $table->text('reg_city')->nullable();
            $table->text('reg_number');
            $table->tinyInteger('is_reg_verified')->default(1)->comment('1=No, 2=Yes');
            $table->text('reg_card_uploaded_img')->nullable();
            $table->tinyInteger('is_reg_card_uploaded')->default(1)->comment('1=No, 2=Yes');
            $table->tinyInteger('is_enable')->default(1)->comment('1=No, 2=Yes');
            $table->text('disable_reason')->nullable()->comment('Reason for disabling');
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
        Schema::dropIfExists('driver_vehicles');
    }
};
