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
        Schema::create('youtube_videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_id')->unique();  // YouTube video ID
            $table->string('title');
            $table->text('description');
            $table->string('thumbnail_url');
            $table->string('channel_id');
            $table->string('channel_title');
            $table->dateTime('published_at');
            $table->boolean('processed')->default(false);  // Whether we've created a blog post
            $table->foreignId('post_id')->nullable()->constrained(table: config('filamentblog.tables.prefix').'posts')->nullOnDelete();
            $table->text('captions')->nullable();  // Stored captions/transcript
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youtube_videos');
    }
};
