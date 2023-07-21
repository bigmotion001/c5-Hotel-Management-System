<?php

namespace App\Providers;

use App\Models\Roomtype;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function($view){
            $view->with('roomtype', Roomtype::orderBy('id', 'desc')->get());
        });
    }
}
