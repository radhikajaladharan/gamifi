<?php

namespace Gamifi\Gamifi\Providers;

use Illuminate\Support\ServiceProvider;

class GamifiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        // Load migrations from the package directory
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        // Optionally publish migrations (if users want to modify them)
        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ], 'gamifi-migrations');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        // Register package services
        $this->app->bind('gamifi', function () {
            return new \Gamifi\Gamifi;
        });
    }
}