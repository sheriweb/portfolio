<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $services = Service::active()
            ->latest()
            ->take(6)
            ->get();

        return view('livewire.show-home', [
            'services' => $services
        ])->layout('components.layouts.app', [
            'title' => 'Home'
        ]);
    }
}
