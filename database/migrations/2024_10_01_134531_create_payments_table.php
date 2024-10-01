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
        Schema::create('web_payments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->decimal('amount', 8, 2); 
            $table->string('type')->nullable(); // Type of payment (e.g., credit card, PayPal)
            $table->string('stripe_payment_intent_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('currency', 3)->nullable();
            $table->string('status')->nullable();
            $table->string('receipt_url')->nullable();
            $table->string('customer_id')->nullable();
            $table->timestamp('payment_date'); // Date of the payment
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_payments');
    }
};
