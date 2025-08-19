<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::insert([
            [
                'title' => 'About Us',
                'content' => 'We are a team of passionate developers and designers committed to building modern digital solutions.',
            ],
            [
                'title' => 'Contact Us',
                'content' => 'Feel free to reach out to us through our contact form or email us directly at info@example.com.',
            ],
        ]);
    }
}
