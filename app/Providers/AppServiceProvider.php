<?php

namespace App\Providers;

use App\About;
use App\Benefit;
use App\Brend;
use App\Comment;
use App\Cost;
use App\Format;
use App\Method;
use App\Process;
use App\Setting;
use App\Technology;
use App\Theme;
use App\Variant;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mockery\Generator\Parameter;

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

        $technologies = Technology::get();
        View::share('technologies', $technologies);

        $benefits = Benefit::get();
        View::share('benefits', $benefits);

        $processes = Process::get();
        View::share('processes', $processes);

        $costs = Cost::get();
        View::share('costs', $costs);

        $brends = Brend::get();
        View::share('brends', $brends);

        $abouts = About::get();
        View::share('abouts', $abouts);

        $comments = Comment::get();
        View::share('comments', $comments);
    }
}
