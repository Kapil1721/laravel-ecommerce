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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('price')->unique();
            $table->string('compare_at_price')->unique();
            $table->string('cost_per_item')->unique();
            $table->string('profit')->unique();
            $table->string('margin')->unique();
            $table->string('product_id')->unique();
            $table->string('qty')->unique();
            $table->string('sku')->unique();
            $table->string('barcode')->unique();
            $table->boolean('track_quantity')->unique();
            $table->boolean('continue_when_oos')->unique();


            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
