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
        Schema::create('vehicles_reg_geo_locations', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->text('name');
            $table->text('province_name');
            $table->text('district_name')->nullable();
            $table->text('tehsil_name')->nullable();
            $table->tinyInteger('location_type')->comment('1=Province, 2=District, 3=Tehsil');
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
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
        Schema::dropIfExists('vehicles_reg_geo_locations');
    }
};
