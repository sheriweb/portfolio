<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            [
                'name' => 'Ali Khan',
                'designation' => 'Full Stack Developer',
                'fb_url' => 'https://facebook.com/alikhan',
                'tw_url' => 'https://twitter.com/alikhan',
                'in_url' => 'https://linkedin.com/in/alikhan',
                'images' => 'teams/ali.jpg',
            ],
            [
                'name' => 'Sara Ahmed',
                'designation' => 'UI/UX Designer',
                'fb_url' => 'https://facebook.com/saraahmed',
                'tw_url' => 'https://twitter.com/saraahmed',
                'in_url' => 'https://linkedin.com/in/saraahmed',
                'images' => 'teams/sara.jpg',
            ],
            [
                'name' => 'Hamza Iqbal',
                'designation' => 'Mobile App Developer',
                'fb_url' => 'https://facebook.com/hamza',
                'tw_url' => 'https://twitter.com/hamza',
                'in_url' => 'https://linkedin.com/in/hamza',
                'images' => 'teams/hamza.jpg',
            ],
        ]);
    }
}
