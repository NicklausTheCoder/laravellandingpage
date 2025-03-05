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
        Schema::create('feature_cards', function (Blueprint $table) {
            $table->id();
            $table->string('icon'); // Icon class (e.g., "bi bi-award")
            $table->string('title'); // Title (e.g., "Corporis voluptates")
            $table->text('description'); // Description
            $table->string('background_color'); // Background color (e.g., "rgba(247, 183, 64, 0.568)")
            $table->integer('order')->default(0); // Order of cards
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feature_cards');
    }
};
