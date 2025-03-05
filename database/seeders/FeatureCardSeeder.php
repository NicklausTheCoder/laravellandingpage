<?php

namespace Database\Seeders;

use App\Models\featurecard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        featurecard::truncate();

        // Seed the "Features Cards" section data
        $featureCards = [
            [
                'icon' => 'bi bi-award',
                'title' => 'Corporis voluptates',
                'description' => 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
                'background_color' => 'rgba(247, 183, 64, 0.568)',
                'order' => 1,
            ],
            [
                'icon' => 'bi bi-check',
                'title' => 'Explicabo consectetur',
                'description' => 'Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore',
                'background_color' => 'rgba(35, 118, 156, 0.411)',
                'order' => 2,
            ],
            [
                'icon' => 'bi bi-sun',
                'title' => 'Ullamco laboris',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt',
                'background_color' => 'rgba(62, 185, 62, 0.39)',
                'order' => 3,
            ],
            [
                'icon' => 'bi bi-shield',
                'title' => 'Labore consequatur',
                'description' => 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere',
                'background_color' => 'rgba(185, 67, 67, 0.555)',
                'order' => 4,
            ],
        ];

        // Insert the feature cards into the database
        foreach ($featureCards as $card) {
            featurecard::create($card);
        }
    }
}
