<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Facilities;
use App\Models\Roomtype;
use App\Models\Testimonials;
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
            $view->with('carousel', Carousel::orderBy('id', 'desc')->get());
            $view->with('about', About::orderBy('id', 'desc')->get());
            $view->with('facilities', Facilities::orderBy('id', 'desc')->get());
            $view->with('testimonials', Testimonials::orderBy('id', 'desc')->get());
        });
    }
}
