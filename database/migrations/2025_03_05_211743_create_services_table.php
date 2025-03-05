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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon'); // Icon class (e.g., "bi bi-activity")
            $table->string('title'); // Title of the service (e.g., "Lorem, ipsum dolor sit amet consectetur")
            $table->text('description'); // Description of the service
            $table->string('link')->nullable(); // Link for "Read More" (e.g., "service-details.html")
            $table->integer('order')->default(0); // Order of services
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
