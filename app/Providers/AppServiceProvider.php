<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $links = array(
            "mobileCss" => "/css/mobile.css",
            "mobileJs" => "/js/mobile.js",
            "desktopCss" => "/css/desktop.css",
            "desktopJs" => "/js/desktop.js",
        );
        
        View::share("links", $links);
    }
}
