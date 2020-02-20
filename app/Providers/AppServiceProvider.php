<?php

namespace App\Providers;

use Illuminate\Support\Facades\Lang;
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
        view()->composer('MiamiTheme::layouts.noNav', function ($view) {
            $view->with('appName', Lang::get('global.appName'))
                ->with('pageTitle', Lang::get('global.appName'))
                ->with('pageTitleLink', '#');
        });
    }
}
