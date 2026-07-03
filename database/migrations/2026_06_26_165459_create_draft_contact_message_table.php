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
        Schema::create('draft_contact_message', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id
            ')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->text('subject');
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draft_contact_message');
    }
};
