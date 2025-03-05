<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\testimonial;
class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        testimonial::truncate();

        // Seed the "Testimonials" section data
        $testimonials = [
            [
                'image' => 'assets/me.jpg',
                'name' => 'Takudzwa Chirume',
                'position' => 'Ceo Coder',
                'quote' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt, quia molestias nostrum sapiente molestiae quis maiores.',
                'order' => 1,
            ],
            [
                'image' => 'assets/me.jpg',
                'name' => 'Panashe Chemhuru',
                'position' => 'Lover boy',
                'quote' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt, quia molestias nostrum sapiente molestiae quis maiores.',
                'order' => 2,
            ],
            [
                'image' => 'assets/me.jpg',
                'name' => 'Kudzai Gwasera',
                'position' => 'Videographer',
                'quote' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt, quia molestias nostrum sapiente molestiae quis maiores.',
                'order' => 3,
            ],
            [
                'image' => 'assets/me.jpg',
                'name' => 'Mopin Mopus',
                'position' => 'Freelancer',
                'quote' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt, quia molestias nostrum sapiente molestiae quis maiores.',
                'order' => 4,
            ],
        ];

        // Insert the testimonials into the database
        foreach ($testimonials as $testimonial) {
            testimonial::create($testimonial);
        }
    }
}
