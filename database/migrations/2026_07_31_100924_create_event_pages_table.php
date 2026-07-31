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
        Schema::create('event_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_sm_tag');   // e.g. "Upcoming"
            $table->string('page_hd_tag');   // e.g. "Tour Dates"
            $table->unsignedInteger('current_year'); // manually overridable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_pages');
    }
};
