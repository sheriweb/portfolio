<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Use Bootstrap 5 styles for pagination links
        Paginator::useBootstrapFive();

        // Share active services to the layout footer
        View::composer('components.layouts.app', function ($view) {
            $footerServices = Service::active()->latest()->take(5)->get();
            $view->with('footerServices', $footerServices);
        });
    }
}
