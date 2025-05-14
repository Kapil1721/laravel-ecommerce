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
        Schema::create('column_conditions', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('conditions');

            $table->timestamps();
        });

        Schema::create('column_conditions_conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('column_id')->nullable();
            $table->foreign('column_id')->references('id')->on('column_conditions')->onDelete('cascade');

            $table->unsignedBigInteger('condition_id')->nullable();
            $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade');

        

            $table->timestamps();
        });     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('column_conditions_conditions');
        Schema::dropIfExists('column_conditions');
      
    }

};
