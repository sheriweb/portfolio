<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $webDev   = Category::where('name', 'Web Development')->first()->id;
        $mobile   = Category::where('name', 'Mobile App Development')->first()->id;
        $design   = Category::where('name', 'UI/UX Design')->first()->id ?? null; // example in case you add later

        Article::insert([
            [
                'title' => 'The Future of Web Development',
                'content' => 'Web development is rapidly evolving with modern frameworks like Laravel, React, and Next.js leading the way. Businesses now demand faster, scalable, and more secure solutions...',
                'image' => 'articles/web-future.jpg',
                'category_id' => $webDev,
            ],
            [
                'title' => 'Why React is the Best Choice for Modern Frontend',
                'content' => 'React has become the most popular frontend library due to its component-based architecture, speed, and scalability. With support from Facebook and a huge developer community...',
                'image' => 'articles/react-frontend.jpg',
                'category_id' => $webDev,
            ],
            [
                'title' => 'Mobile App Development with React Native',
                'content' => 'React Native allows developers to build mobile applications for both Android and iOS using a single codebase. This saves time, reduces cost, and ensures consistent performance...',
                'image' => 'articles/react-native-mobile.jpg',
                'category_id' => $mobile,
            ],
        ]);
    }
}
