<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conference::create([
            'title' => 'Laravel Developer Conference',
            'description' => 'A conference focused on modern Laravel development, architecture, and real-world project scaling.',
            'date' => '2025-02-12',
            'address' => 'Berlin Tech Hub',
        ]);

        Conference::create([
            'title' => 'Frontend Future Summit',
            'description' => 'Exploring the future of frontend development, performance, and accessibility.',
            'date' => '2025-03-18',
            'address' => 'Amsterdam Conference Center',
        ]);

        Conference::create([
            'title' => 'Cyber Security Forum',
            'description' => 'Discussions on modern security threats, network defense, and cloud protection.',
            'date' => '2025-04-05',
            'address' => 'London Digital Arena',
        ]);
    }
}
