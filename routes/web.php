<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowServiceDetail;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('service.page');
Route::get('/service/{id}', ShowServiceDetail::class)->name('service.detail');
Route::get('/team', ShowTeamPage::class)->name('team.page');
