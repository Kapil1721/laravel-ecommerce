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
        Schema::table('orders', function (Blueprint $table) {

            // $table->decimal('sub_total', 10, 2)->nullable();

            // $table->decimal('discount_amount', 10, 2)->nullable();
            // $table->decimal('grand_total', 10, 2)->nullable();
            // $table->boolean('is_paid')->default('false');
            $table->enum('shipping_status', ['pending', 'shipped', 'in_transit', 'delivered'])->default('delivered');
            $table->date('estimated_delivery');
            $table->enum('address', ['same', 'different'])->default('same');
            $table->timestamp('delivered_at')->nullable();


            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
