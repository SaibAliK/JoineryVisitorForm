<?php

namespace App\Providers;
use Route; // INCLUDE THIS
use Blade; // INCLUDE THIS

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('routeis', function ($expression) {
            return fnmatch($expression, Route::currentRouteName());
            });
            
    }
}
