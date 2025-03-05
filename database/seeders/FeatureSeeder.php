<?php

namespace Database\Seeders;
use App\Models\feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        Feature::truncate();

        // Seed the "Features" section data
        $features = [
            [
                'title' => 'Features',
                'subtitle' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi',
                'tab_title' => 'feature 1',
                'heading' => 'Voluptatem dignissimos provident',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'features' => json_encode([
                    ['icon' => 'bi bi-check2-all', 'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit rerum quisquam'],
                    ['icon' => 'bi bi-check2-all', 'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit rerum quisquam'],
                    ['icon' => 'bi bi-check2-all', 'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit rerum quisquam'],
                ]),
                'image' => 'assets/right.png',
                'order' => 1,
            ],
            [
                'title' => 'Features',
                'subtitle' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi',
                'tab_title' => 'feature 2',
                'heading' => 'Neque exercitationem debitis',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'features' => json_encode([
                    ['icon' => 'bi bi-check2-all', 'text' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat'],
                    ['icon' => 'bi bi-check2-all', 'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit'],
                    ['icon' => 'bi bi-check2-all', 'text' => 'Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed'],
                ]),
                'image' => 'assets/right.png',
                'order' => 2,
            ],
            [
                'title' => 'Features',
                'subtitle' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi',
                'tab_title' => 'feature 3',
                'heading' => 'Voluptatibus commodi accusamu',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'features' => json_encode([
                    ['icon' => 'bi bi-check2-all', 'text' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat'],
                    ['icon' => 'bi bi-check2-all', 'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit'],
                    ['icon' => 'bi bi-check2-all', 'text' => 'Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed'],
                ]),
                'image' => 'assets/right.png',
                'order' => 3,
            ],
        ];

        // Insert the features into the database
        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
