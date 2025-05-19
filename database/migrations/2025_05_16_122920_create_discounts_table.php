<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();

            // Discount Type
            $table->enum('type', ['amount-off-product', 'buy-x-get-y', 'free-shipping']);
            $table->enum('method', ['code', 'automatic']);
            $table->string('code')->nullable();
            $table->string('title')->nullable();

            // Value
            $table->enum('discount_type', ['fixed', 'percentage', 'free'])->default('percentage');
            $table->decimal('amount', 10, 2)->nullable();

            // Applies To
            $table->enum('applies_to', ['collections', 'products'])->default('collections');

            // Requirements
            $table->enum('requirement', ['no_minimum_requirements', 'minimum_purchase_amount', 'minimum_quantity_items'])->default('no_minimum_requirements');
            $table->decimal('min_amount', 10, 2)->nullable();
            $table->integer('min_qty')->nullable();

            // Buy X Get Y
            $table->enum('buys', ['minimum_quantity_items', 'minimum_purchase_amount'])->default('minimum_quantity_items');
            $table->integer('gets_qty')->nullable();
            $table->enum('gets_applies_to', ['collections', 'products'])->default('collections');

            // Eligibility
            $table->enum('eligibility', ['all_customers', 'specific_customers'])->default('all_customers');

            // Usage
            $table->integer('total_usage')->nullable();
            $table->boolean('once_per_customer')->default(false);

            // Date & Time
            $table->date('start_date')->nullable();
            $table->time('start_time')->nullable();
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();

            $table->timestamps();
        });
        Schema::create('collection_discount', function (Blueprint $table) {
            $table->foreignId('discount_id')->constrained()->onDelete('cascade');
            $table->foreignId('collection_id')->constrained()->onDelete('cascade');
            $table->primary(['discount_id', 'collection_id']);
        });
        Schema::create('discount_product', function (Blueprint $table) {
            $table->foreignId('discount_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->primary(['discount_id', 'product_id']);
        });
        Schema::create('discount_gets_collections', function (Blueprint $table) {
            $table->foreignId('discount_id')->constrained()->onDelete('cascade');
            $table->foreignId('collection_id')->constrained()->onDelete('cascade');
            $table->primary(['discount_id', 'collection_id']);
        });
        Schema::create('discount_gets_products', function (Blueprint $table) {
            $table->foreignId('discount_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->primary(['discount_id', 'product_id']);
        });
        Schema::create('customer_discount', function (Blueprint $table) {
            $table->foreignId('discount_id')->constrained()->onDelete('cascade');
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->primary(['discount_id', 'customer_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_discount');
        Schema::dropIfExists('discount_gets_products');
        Schema::dropIfExists('discount_gets_collections');
        Schema::dropIfExists('discount_product');
        Schema::dropIfExists('collection_discount');
        Schema::dropIfExists('discounts');
    }
};
