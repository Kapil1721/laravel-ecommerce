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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->decimal('actual_price', 10, 2)->nullable();
            $table->boolean('track_stock')->nullable();
            $table->string('stock')->nullable();
            $table->boolean('continue_when_oos')->nullable();
            $table->boolean('if_sku')->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->boolean('shipping')->nullable();
            $table->string('weight')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug')->nullable();
            $table->enum('status',['active','draft'])->default('active');
            $table->enum('product_type',['single','variable','affiliate','downloadable'])->default('single');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
