<?php

namespace App\Providers;

use App\Models\Notice;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;

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
        // Using view composer to set following variables globally
        $head_menu = FilamentNavigation::get('front-header');
        $notifications = Notice::all()->take(5);
        View::share('head_menu', $head_menu);
        View::share('notifications', $notifications);
    }
}
