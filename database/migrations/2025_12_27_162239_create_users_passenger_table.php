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
        Schema::create('users_passenger', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255)->nullable();
            $table->string('cnic');
            $table->string('email', 191)->unique(); // reduced length for utf8mb4_bin
            $table->tinyInteger('is_email_verified')->default(1)->comment('1=No, 2=Yes');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile', 191)->unique(); // reduced length
            $table->tinyInteger('is_mobile_verified')->default(1)->comment('1=No, 2=Yes');
            $table->timestamp('mobile_verified_at')->nullable(); 
            $table->string('password');
            $table->decimal('wallet_balance', 12, 2)->default(0);
            $table->enum('status', ['active', 'blocked', 'pending'])->default('pending');
            $table->text('status_descripition')->default('');;
            $table->rememberToken();
            $table->timestamps();
            // Set engine to InnoDB
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_passenger');
    }
};
