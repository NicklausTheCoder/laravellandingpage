<?php

namespace Database\Seeders;
use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::create([
            'company_badge' => 'Working for your success',
            'heading_line1' => 'Lorem ipsum',
            'heading_line2' => 'sit amet,',
            'heading_line3' => 'consectetur adipisicing',
            'accent_text' => 'consectetur adipisicing',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum maxime omnis quo ad odio,',
            'primary_button_text' => 'Get Started',
            'primary_button_link' => '#about',
            'secondary_button_text' => 'Play Video',
            'secondary_button_link' => '#',
            'hero_image' => 'assets/right.png',
            'customer_avatars' => json_encode([
                'assets/me.jpg',
                'assets/me.jpg',
                'assets/me.jpg',
                'assets/me.jpg',
                'assets/me.jpg',
            ]),
            'customer_text' => '12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit',
        ]);
    }
}