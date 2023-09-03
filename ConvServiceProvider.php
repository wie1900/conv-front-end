<?php

namespace Conv;

use Illuminate\Support\ServiceProvider;

class ConvServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/App/Http/views', 'conv');
    }
}
