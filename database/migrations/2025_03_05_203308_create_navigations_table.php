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
        Schema::create('navigations', function (Blueprint $table) {
            $table->id();
            $table->string('label'); // Label for the menu item (e.g., "Home", "About")
            $table->string('url'); // URL or anchor link (e.g., "#hero", "#about")
            $table->unsignedBigInteger('parent_id')->nullable(); // For dropdown menus
            $table->integer('order')->default(0); // Order of the menu items
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('navigations');
    }
};
