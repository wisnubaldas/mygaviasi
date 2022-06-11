<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Traits\ModelTrait;
class AppServiceProvider extends ServiceProvider
{
    use ModelTrait;
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
        View::share('landingMenu', self::landingMenu());
        View::share('menu', self::menu());
        View::share('menuLayout', true);
    }
}
