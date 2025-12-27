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
        Schema::create('transactions_passenger', function (Blueprint $table) {
            $table->id();
            // Add foreign key separately
            $table->foreignId('passenger_id')->constrained('users_passenger', 'id')->cascadeOnDelete();
            $table->foreignId('payment_status')->constrained('payment_status', 'id')->cascadeOnDelete();
             // Money
            $table->decimal('amount', 12, 2);
            $table->decimal('balance_before', 12, 2)->nullable();
            $table->decimal('balance_after', 12, 2)->nullable();
            // Transaction nature
            $table->enum('type', ['credit', 'debit']);
            $table->enum('status', [
                'pending',
                'completed',
                'failed',
                'refunded'
            ])->default('pending');
            // Payment info
            $table->string('payment_method')->nullable(); // wallet, card, bank
            $table->string('transaction_ref')->nullable(); // gateway ID

            // Description & metadata
            $table->text('description')->nullable();
            $table->json('meta')->nullable();
            
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
        Schema::dropIfExists('transactions_passenger');
    }
};
