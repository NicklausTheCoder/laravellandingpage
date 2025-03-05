<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pricing;
class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        pricing::truncate();

        // Seed the "Pricing" section data
        $pricingPlans = [
            [
                'plan_name' => 'Basic Plan',
                'currency' => '$',
                'amount' => 9.9,
                'period' => '/ month',
                'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.',
                'features' => json_encode([
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Duis aute irure dolor'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Excepteur sint occaecat'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Nemo enim ipsam voluptatem'],
                ]),
                'button_text' => 'Buy Now',
                'button_class' => 'btn btn-primary',
                'is_popular' => false,
                'popular_badge_text' => null,
                'order' => 1,
            ],
            [
                'plan_name' => 'Standard Plan',
                'currency' => '$',
                'amount' => 19.9,
                'period' => '/ month',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.',
                'features' => json_encode([
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Lorem ipsum dolor sit amet'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Consectetur adipiscing elit'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Sed do eiusmod tempor'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Ut labore et dolore magna'],
                ]),
                'button_text' => 'Buy Now',
                'button_class' => 'btn btn-light',
                'is_popular' => true,
                'popular_badge_text' => 'Most Popular',
                'order' => 2,
            ],
            [
                'plan_name' => 'Premium Plan',
                'currency' => '$',
                'amount' => 39.9,
                'period' => '/ month',
                'description' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.',
                'features' => json_encode([
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Temporibus autem quibusdam'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Saepe eveniet ut et voluptates'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Nam libero tempore soluta'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Cumque nihil impedit quo'],
                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'Maxime placeat facere possimus'],
                ]),
                'button_text' => 'Buy Now',
                'button_class' => 'btn btn-primary',
                'is_popular' => false,
                'popular_badge_text' => null,
                'order' => 3,
            ],
        ];

        // Insert the pricing plans into the database
        foreach ($pricingPlans as $plan) {
           pricing::create($plan);
        }
    }
}
