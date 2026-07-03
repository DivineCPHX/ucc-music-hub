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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('section_1')->nullable();
            $table->string('section_tag_1')->nullable();
            $table->string('section_2')->nullable();
            $table->string('section_tag_2')->nullable();
            $table->string('section_3')->nullable();
            $table->string('section_tag_3')->nullable();
            $table->string('section_4')->nullable();
            $table->string('section_tag_4')->nullable();
            $table->string('section_5')->nullable();
            $table->string('section_tag_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};
