<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use View;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Carbon is an included package from laravel
        $age = Carbon::createFromDate(1993, 7, 6)->age;

        //View::share is used for sharing a data across all view
        view()->share('age', $age);
        view()->share('myname', 'renato');

        //view()->share('auth', Auth::user());
        View::composer('*',function($view)
        {
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
