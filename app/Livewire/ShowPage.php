<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;

class ShowPage extends Component
{
    public $page;
    public $slug;

    public function mount($slug = null)
    {
        // Handle specific named routes
        if (request()->routeIs('about.us')) {
            $this->slug = 'about-us';
        } elseif (request()->routeIs('privacy.policy')) {
            $this->slug = 'privacy-policy';
        } elseif (request()->routeIs('terms.conditions')) {
            $this->slug = 'terms-conditions';
        } else {
            $this->slug = $slug;
        }
        
        // Get the page by slug
        $this->page = Page::where('slug', $this->slug)
            ->where('status', 1)
            ->first();
            
        // If page not found, create a placeholder
        if (!$this->page) {
            $this->page = new Page([
                'title' => ucwords(str_replace('-', ' ', $this->slug)),
                'content' => '<p>This page is coming soon.</p>',
                'status' => 1
            ]);
        }
    }

    public function render()
    {
        return view('livewire.show-page');
    }
}
