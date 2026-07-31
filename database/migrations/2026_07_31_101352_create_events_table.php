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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_type_id')->constrained();
        $table->foreignId('artist_id')->nullable()->constrained();
        $table->string('name');
        $table->string('venue');           // building name, e.g. "Grace Cathedral"
        $table->string('location');        // City, State, Country
        $table->unsignedTinyInteger('day');
        $table->unsignedTinyInteger('month');
        $table->unsignedSmallInteger('year');
        $table->time('time');
        $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
