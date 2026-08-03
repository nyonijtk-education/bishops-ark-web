<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Force HTTPS in production, but ONLY if not running in the console/terminal
        if (config('app.env') === 'production' && !$this->app->runningInConsole()) {
            URL::forceScheme('https');
        }
    }
}