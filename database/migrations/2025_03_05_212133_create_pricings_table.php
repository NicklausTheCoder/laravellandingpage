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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name'); // Plan name (e.g., "Basic Plan")
            $table->string('currency'); // Currency symbol (e.g., "$")
            $table->decimal('amount', 8, 2); // Plan amount (e.g., 9.9)
            $table->string('period'); // Billing period (e.g., "/ month")
            $table->text('description'); // Plan description
            $table->json('features'); // List of features (JSON array)
            $table->string('button_text'); // Button text (e.g., "Buy Now")
            $table->string('button_class'); // Button class (e.g., "btn btn-primary")
            $table->boolean('is_popular')->default(false); // Whether the plan is popular
            $table->string('popular_badge_text')->nullable(); // Popular badge text (e.g., "Most Popular")
            $table->integer('order')->default(0); // Order of plans
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
