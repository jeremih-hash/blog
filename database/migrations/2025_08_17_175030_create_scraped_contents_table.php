<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scraped_contents', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('scraped_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scraped_contents');
    }
};