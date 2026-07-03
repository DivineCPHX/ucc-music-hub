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
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subscription_id')->constrained();
            $table->timestamp('starts_at');
            $table->timestamp('ends_at')->nullable();                  // null = active indefinitely (free tier)
            $table->enum('status', ['active', 'cancelled', 'expired', 'trial'])->default('active');
            $table->string('payment_reference')->nullable();           // Paystack / Stripe ref
            $table->timestamps();

            $table->index(['user_id', 'subscription_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subscriptions');
    }
};
