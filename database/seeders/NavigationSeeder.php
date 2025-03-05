<?php

namespace Database\Seeders;
use App\Models\Navigation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Clear existing data
    Navigation::truncate();

    // Seed the navigation menu items
    $menuItems = [
        [
            'label' => 'Home',
            'url' => '#hero',
            'parent_id' => null,
            'order' => 1,
        ],
        [
            'label' => 'About',
            'url' => '#about',
            'parent_id' => null,
            'order' => 2,
        ],
        [
            'label' => 'Features',
            'url' => '#features',
            'parent_id' => null,
            'order' => 3,
        ],
        [
            'label' => 'Services',
            'url' => '#services',
            'parent_id' => null,
            'order' => 4,
        ],
        [
            'label' => 'Pricing',
            'url' => '#pricing',
            'parent_id' => null,
            'order' => 5,
        ],
        [
            'label' => 'Dropdown',
            'url' => '#',
            'parent_id' => null,
            'order' => 6,
        ],
        [
            'label' => 'Dropdown 1',
            'url' => '#',
            'parent_id' => 6, // Parent ID for "Dropdown"
            'order' => 1,
        ],
        [
            'label' => 'Deep Dropdown',
            'url' => '#',
            'parent_id' => 6, // Parent ID for "Dropdown"
            'order' => 2,
        ],
        [
            'label' => 'Deep Dropdown 1',
            'url' => '#',
            'parent_id' => 8, // Parent ID for "Deep Dropdown"
            'order' => 1,
        ],
        [
            'label' => 'Deep Dropdown 2',
            'url' => '#',
            'parent_id' => 8, // Parent ID for "Deep Dropdown"
            'order' => 2,
        ],
        [
            'label' => 'Deep Dropdown 3',
            'url' => '#',
            'parent_id' => 8, // Parent ID for "Deep Dropdown"
            'order' => 3,
        ],
        [
            'label' => 'Deep Dropdown 4',
            'url' => '#',
            'parent_id' => 8, // Parent ID for "Deep Dropdown"
            'order' => 4,
        ],
        [
            'label' => 'Deep Dropdown 5',
            'url' => '#',
            'parent_id' => 8, // Parent ID for "Deep Dropdown"
            'order' => 5,
        ],
        [
            'label' => 'Dropdown 2',
            'url' => '#',
            'parent_id' => 6, // Parent ID for "Dropdown"
            'order' => 3,
        ],
        [
            'label' => 'Dropdown 3',
            'url' => '#',
            'parent_id' => 6, // Parent ID for "Dropdown"
            'order' => 4,
        ],
        [
            'label' => 'Dropdown 4',
            'url' => '#',
            'parent_id' => 6, // Parent ID for "Dropdown"
            'order' => 5,
        ],
        [
            'label' => 'Contact',
            'url' => '#contact',
            'parent_id' => null,
            'order' => 7,
        ],
    ];

    // Insert the menu items into the database
    foreach ($menuItems as $item) {
        Navigation::create($item);
    }
    }
}
