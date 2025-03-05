<?php

namespace Database\Seeders;
use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        About::truncate();

        // Seed the "About" section data
        About::create([
            'meta' => 'MORE ABOUT US',
            'heading' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
            'features_left' => json_encode([
                ['icon' => 'bi bi-check-circle-fill', 'text' => 'Lorem ipsum dolor sit amet'],
                ['icon' => 'bi bi-check-circle-fill', 'text' => 'Consectetur adipiscing elit'],
                ['icon' => 'bi bi-check-circle-fill', 'text' => 'Sed do eiusmod tempor'],
            ]),
            'features_right' => json_encode([
                ['icon' => 'bi bi-check-circle-fill', 'text' => 'Incididunt ut labore et'],
                ['icon' => 'bi bi-check-circle-fill', 'text' => 'Dolore magna aliqua'],
                ['icon' => 'bi bi-check-circle-fill', 'text' => 'Ut enim ad minim veniam'],
            ]),
            'ceo_name' => 'Takudzwa Chirume',
            'ceo_position' => 'CEO Founder',
            'ceo_image' => 'assets/me.jpg',
            'contact_label' => 'Call us anytime',
            'contact_number' => '+263 717143480',
            'main_image' => 'assets/WhatMakesaCompanySuccessful.jpg',
            'small_image' => 'assets/GettyImages-1210536688-f8aa4c9c1ace4e348e2bcd5e267fdbb3.jpg',
            'experience_years' => '15+',
            'experience_text' => 'Of experience in business service',
        ]);
    }
}
