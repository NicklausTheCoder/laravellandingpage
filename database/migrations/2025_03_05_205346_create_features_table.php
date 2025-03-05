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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Section title (e.g., "Features")
            $table->string('subtitle')->nullable(); // Subtitle (e.g., "Lorem ipsum dolor sit...")
            $table->string('tab_title'); // Tab title (e.g., "feature 1")
            $table->string('heading'); // Heading inside the tab (e.g., "Voluptatem dignissimos provident")
            $table->text('description'); // Description inside the tab
            $table->json('features'); // List of features (JSON array)
            $table->string('image'); // Image path
            $table->integer('order')->default(0); // Order of tabs
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
