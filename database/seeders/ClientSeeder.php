<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        Client::truncate();

        // Seed the "Clients" section data
        $clients = [
            ['logo' => 'assets/Facebook.svg.png', 'order' => 1],
            ['logo' => 'assets/Facebook.svg.png', 'order' => 2],
            ['logo' => 'assets/Facebook.svg.png', 'order' => 3],
            ['logo' => 'assets/Facebook.svg.png', 'order' => 4],
            ['logo' => 'assets/Facebook.svg.png', 'order' => 5],
            ['logo' => 'assets/Facebook.svg.png', 'order' => 6],
            ['logo' => 'assets/Facebook.svg.png', 'order' => 7],
            ['logo' => 'assets/Facebook.svg.png', 'order' => 8],
        ];

        // Insert the clients into the database
        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
