<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServicePage extends Component
{
    public function render()
    {
        $services = Service::active()
            ->latest()
            ->get();

        return view('livewire.show-service-page', [
            'services' => $services
        ])->layout('components.layouts.app', [
            'title' => 'Services'
        ]);
    }
}
