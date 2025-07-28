<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('comment_media', function (Blueprint $table) {

            $table->unsignedBigInteger('comment_id')->nullable();
            $table->foreign('comment_id')->references('id')->on('product_comments')->onDelete('cascade');
            $table->unsignedBigInteger('media_id')->nullable();
            $table->foreign('media_id')->references('id')->on('other_media')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comment_media');
    }
};