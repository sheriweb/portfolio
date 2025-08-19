<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ShowArticle extends Component
{
    use WithPagination;

    public int $perPage = 6;

    public function render()
    {
        $articles = Article::with('category')
            ->published()
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.show-article', [
            'articles' => $articles,
        ])->layout('components.layouts.app', [
            'title' => 'Blog | Articles',
        ]);
    }
}
