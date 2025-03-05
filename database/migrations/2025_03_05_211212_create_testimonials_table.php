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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Path to the testimonial image (e.g., "assets/me.jpg")
            $table->string('name'); // Name of the testimonial giver (e.g., "Takudzwa Chirume")
            $table->string('position'); // Position of the testimonial giver (e.g., "Ceo Coder")
            $table->text('quote'); // Testimonial quote
            $table->integer('order')->default(0); // Order of testimonials
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
