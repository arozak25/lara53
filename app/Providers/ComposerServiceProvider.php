<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        //The below code is used to share a data to a more than one view with view creator
        View::creator(['pages.profile', 'pages.setting'],'App\Http\ViewComposers\ProfileComposer' );

        //The below code is used to share a data to a more than one view with view composer
        //View::composer(['pages.profile', 'pages.setting'],'App\Http\ViewComposers\ProfileComposer' );

        //The below code is used to share a data with just one view with view composer
        //View::composer('pages.profile', 'App\Http\ViewComposers\ProfileComposer');
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
