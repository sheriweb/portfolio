<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;

class ShowFaqPage extends Component
{
    public function render()
    {
        $faqs = Faq::active()->latest()->get();

        return view('livewire.show-faq-page', [
            'faqs' => $faqs,
        ])->layout('components.layouts.app', [
            'title' => 'FAQs',
        ]);
    }
}
