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
        Schema::create('blog_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('photo');
            $table->text('blog_description')->nullable();
            $table->longText('blog_subTitle_1')->nullable();
            $table->text('blog_content_1')->nullable();
            $table->longText('blog_subTitle_2')->nullable();
            $table->text('blog_content_2')->nullable();
            $table->text('blog_quote')->nullable();
            $table->string('publish_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_contents');
    }
};
