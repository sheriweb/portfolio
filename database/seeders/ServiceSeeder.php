<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'We create responsive and high-performing websites using modern technologies like Laravel, React, and TailwindCSS.',
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Our team builds cross-platform mobile apps using Flutter and React Native to provide seamless user experiences.',
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'We design intuitive and engaging interfaces that enhance usability and maximize user satisfaction.',
            ],
            [
                'title' => 'SEO & Digital Marketing',
                'description' => 'Boost your online presence with our SEO strategies, content marketing, and social media campaigns.',
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                'title' => $service['title'],
                'short_description' => Str::limit($service['description'], 100),
                'description' => $service['description'],
            ]);
        }
    }
}
