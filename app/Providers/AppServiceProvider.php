<?php

namespace App\Providers;

use App\Format;
use App\Method;
use App\Theme;
use App\Variant;
use Illuminate\Support\Facades\View;
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
        $variants = Variant::get();
        View::share('variants', $variants);

        $formats = Format::get();
        View::share('formats', $formats);

        $themes = Theme::get();
        View::share('themes', $themes);

        $methods = Method::get();
        View::share('methods', $methods);
    }
}
