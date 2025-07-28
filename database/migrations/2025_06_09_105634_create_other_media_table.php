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
        Schema::create('other_media', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('title')->nullable(); // e.g., 'image', 'video', 'audio'
            $table->string('alt')->nullable(); // e.g., 'image/jpeg', 'video/mp4', 'audio/mpeg'
            $table->string('extension')->nullable(); // e.g., 'image', 'video', 'audio'
            $table->string('type')->nullable(); // e.g., 'image/jpeg', 'video/mp4', 'audio/mpeg'
            $table->string('size')->nullable(); // e.g., '2MB', '500KB'
            $table->string('path')->nullable(); // e.g., 'uploads/images', 'uploads/videos', 'uploads/audios'

            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_media');
    }
};
