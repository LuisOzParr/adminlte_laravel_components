<?php

namespace Ozparr\AdminlteComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AdminlteComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'adminLTEComponents');
        Blade::component('adminLTEComponents::components.box', 'box');
        Blade::component('adminLTEComponents::components.modal', 'modal');
        Blade::component('adminLTEComponents::components.splitButton', 'splitBtn');
    }

    /**
     * Register services.x
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
