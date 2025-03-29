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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who placed the order
            $table->decimal('total_amount', 10, 2); // Total price of the order
            $table->string('status')->default('pending'); // pending, completed, canceled
            $table->text('shipping_address');
            $table->string('payment_method')->default('cash_on_delivery'); // COD, card, etc.
            $table->string('transaction_id')->nullable(); // For payment gateways
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
