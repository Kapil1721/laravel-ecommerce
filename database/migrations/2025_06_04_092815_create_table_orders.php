<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // /**
    // //  * Run the migrations.
    // // //  */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->on('customers')->references('id')->onDelete('set null');
            $table->decimal('sub_total', 10, 2)->nullable();
            $table->decimal('discount_amount', 10, 2)->nullable();
            $table->decimal('grand_total', 10, 2)->nullable();
            $table->enum('payment_method', ['cod', 'card', 'paypal'])->default('cod');
            $table->string('transaction_id')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->enum('status', ['accepted', 'pending', 'cancelled'])->default('accepted');
            $table->enum('shipping_status', ['pending', 'shipped', 'in_transit', 'delivered'])->default('delivered');
            $table->date('estimated_delivery')->nullable();
            $table->enum('address', ['same', 'different'])->default('same');
            $table->timestamp('delivered_at')->nullable();
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
