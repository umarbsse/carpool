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
        Schema::create('roles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->id();
            $table->string('name', 255)->unique();
            $table->string('description')->nullable();
            $table->timestamps();
            
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_bin';
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('cnic');
            $table->string('email', 191)->unique(); // reduced length for utf8mb4_bin
            $table->string('mobile', 191)->unique(); // reduced length
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable(); 
            // Create role_id as unsignedBigInteger with default 1
            $table->unsignedBigInteger('role_id')->default(1);
            // Add foreign key separately
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->enum('status', ['active', 'blocked', 'pending'])->default('pending');
            $table->text('status_descripition')->default('');;
            $table->rememberToken();
            $table->timestamps();
            // Set engine to InnoDB
            $table->engine = 'InnoDB';
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            // Set engine to InnoDB
            $table->engine = 'InnoDB';
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            // Set engine to InnoDB
            $table->engine = 'InnoDB';
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
