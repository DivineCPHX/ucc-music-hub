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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id')->constrained()->cascadeOnDelete();
            $table->foreignId('artist_id')->constrained()->cascadeOnDelete();
            $table->foreignId('song_genre_id')->constrained('song_genre')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->string('song_photo')->nullable();
            $table->unsignedInteger('release_date')->nullable();
            $table->unsignedInteger('song_bpm')->nullable();
            $table->string('song_key')->nullable();
            $table->text('description')->nullable();
            $table->longText('song_lyrics')->nullable();
            $table->string('song_duration')->nullable();
            $table->json('social_links')->nullable();
            $table->timestamps();

            $table->index('artist_id');
            $table->index('album_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
