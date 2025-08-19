<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDetail extends Component
{
    public Article $article;

    public function mount(Article $article): void
    {
        $this->article = $article->load('category');
    }

    public function render()
    {
        return view('livewire.article-detail', [
            'article' => $this->article,
        ])->layout('components.layouts.app', [
            'title' => $this->article->title,
        ]);
    }
}
