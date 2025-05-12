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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('price')->nullable();
            $table->string('compare_at_price')->nullable();
            $table->string('cost_per_item')->nullable();
            $table->string('profit')->nullable();
            $table->string('margin')->nullable();

            $table->string('qty')->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->boolean('track_quantity')->nullable();
            $table->boolean('continue_when_oos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
