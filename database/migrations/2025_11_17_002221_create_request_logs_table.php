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
        Schema::create('request_logs', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->string('device')->nullable();
            $table->string('platform')->nullable();
            $table->string('platform_version')->nullable();
            $table->string('browser')->nullable();
            $table->string('browser_version')->nullable();
            $table->boolean('is_bot')->default(false);
            $table->string('robot_name')->nullable();
            $table->string('method', 10)->nullable(); // HTTP method
            $table->string('url')->nullable(); // full URL
            $table->string('route_name')->nullable(); // route name
            $table->string('controller_name')->nullable(); // only controller
            $table->string('controller_method')->nullable(); // only method
            $table->unsignedSmallInteger('response_status')->nullable(); // new column
            $table->string('response_status_name')->nullable(); // e.g., OK, Not Found
            $table->string('response_status_description')->nullable(); // e.g., Request succeeded
            $table->text('payload')->nullable(); // request payload
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_bin';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_logs');
    }
};
