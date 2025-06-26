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
        Schema::table('collections', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
            $table->enum('match', ['all', 'any'])->default('all')->after('type');
        });
        Schema::table('collection_column_conditions', function (Blueprint $table) {
            $table->unsignedBigInteger('condition_id')->nullable()->after('column_condition_id');
            $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade');
            $table->string('value')->nullable()->after('condition_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('collections', function (Blueprint $table) {
            $table->dropColumn(['slug', 'match']);
        });
        Schema::table('collection_column_conditions', function (Blueprint $table) {
            $table->dropColumn(['condition_id', 'value']);
        });
    }
};
