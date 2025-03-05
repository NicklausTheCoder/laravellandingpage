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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('meta')->nullable(); // "MORE ABOUT US"
            $table->string('heading'); // Main heading
            $table->text('description'); // Paragraph text
            $table->json('features_left'); // Left feature list (JSON array)
            $table->json('features_right'); // Right feature list (JSON array)
            $table->string('ceo_name'); // CEO name
            $table->string('ceo_position'); // CEO position
            $table->string('ceo_image'); // CEO image path
            $table->string('contact_label'); // "Call us anytime"
            $table->string('contact_number'); // Contact number
            $table->string('main_image'); // Main image path
            $table->string('small_image'); // Small image path
            $table->string('experience_years'); // "15+ Years"
            $table->string('experience_text'); // "Of experience in business service"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
