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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           
            $table->string('name')->nullable();
            $table->json('value')->nullable();



        });
        Schema::create('category_variants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('variant_id')->constrained()->onDelete('cascade');



        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
  
        Schema::dropIfExists('category_variants');
        Schema::dropIfExists('variants');
    }
};
