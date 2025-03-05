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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('company_badge');
            $table->string('heading_line1');
            $table->string('heading_line2');
            $table->string('heading_line3');
            $table->string('accent_text');
            $table->text('description');
            $table->string('primary_button_text');
            $table->string('primary_button_link');
            $table->string('secondary_button_text');
            $table->string('secondary_button_link');
            $table->string('hero_image');
            $table->string('customer_avatars')->nullable(); // JSON or string for multiple avatars
            $table->string('customer_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
