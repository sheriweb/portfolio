<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowArticle;
use App\Livewire\ArticleDetail;
use App\Livewire\ShowPage;
use App\Livewire\ShowServiceDetail;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowFaqPage;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('service.page');
Route::get('/service/{id}', ShowServiceDetail::class)->name('service.detail');
Route::get('/team', ShowTeamPage::class)->name('team.page');
Route::get('/faqs', ShowFaqPage::class)->name('faqs.page');

// Articles (blog)
Route::get('/articles', ShowArticle::class)->name('articles.index');
Route::get('/article/{article}', ArticleDetail::class)->name('articles.show');

// Dynamic pages
Route::get('/page/{slug}', ShowPage::class)->name('page.show');

// Specific named routes for common pages
Route::get('/about-us', ShowPage::class)->name('about.us');
Route::get('/privacy-policy', ShowPage::class)->name('privacy.policy');
Route::get('/terms-conditions', ShowPage::class)->name('terms.conditions');
