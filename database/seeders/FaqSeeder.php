<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert([
            [
                'question' => 'What services do you provide?',
                'answer' => 'We provide Web Development, Mobile App Development, UI/UX Design, and SEO & Digital Marketing services.',
            ],
            [
                'question' => 'Do you build mobile apps?',
                'answer' => 'Yes, we build mobile apps using React Native and Flutter for cross-platform support.',
            ],
            [
                'question' => 'How can I contact you?',
                'answer' => 'You can contact us via our website contact form or directly through email.',
            ],
        ]);
    }
}
