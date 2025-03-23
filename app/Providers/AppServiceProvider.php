<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('path.public', function () {
            return realpath(base_path() . '/../public');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Example of bootstrapping a service
        // $this->app['view']->composer('view.name', function ($view) {
        //     $view->with('key', 'value');
        // });
    }
}
