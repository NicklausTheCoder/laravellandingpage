<?php

namespace Database\Seeders;
use App\Models\service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        Service::truncate();

        // Seed the "Services" section data
        $services = [
            [
                'icon' => 'bi bi-activity',
                'title' => 'Lorem, ipsum dolor sit amet consectetur',
                'description' => 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.',
                'link' => 'service-details.html',
                'order' => 1,
            ],
            [
                'icon' => 'bi bi-diagram-3',
                'title' => 'Lorem, ipsum dolor',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur exercitationem dolorum, inventore eos velit aut corporis',
                'link' => 'service-details.html',
                'order' => 2,
            ],
            [
                'icon' => 'bi bi-easel',
                'title' => 'Lorem, ipsum dolor',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur exercitationem dolorum, inventore eos velit aut corporis',
                'link' => 'service-details.html',
                'order' => 3,
            ],
            [
                'icon' => 'bi bi-clipboard-data',
                'title' => 'Lorem, ipsum dolor',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur exercitationem dolorum, inventore eos velit aut corporis',
                'link' => 'service-details.html',
                'order' => 4,
            ],
        ];

        // Insert the services into the database
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
