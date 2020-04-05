<?php

namespace Ozparr\AdminlteComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Ozparr\AdminlteComponents\View\Components\Card\Index as Card;
use Ozparr\AdminlteComponents\View\Components\Form\Index as Form;
use Ozparr\AdminlteComponents\View\Components\Form\Input;
use Ozparr\AdminlteComponents\View\Components\Form\Select;
use Ozparr\AdminlteComponents\View\Components\Modal\Index as Modal;
use Ozparr\AdminlteComponents\View\Components\Tabs\Content;
use Ozparr\AdminlteComponents\View\Components\Tabs\Option;
use Ozparr\AdminlteComponents\View\Components\Tabs\Index as Tabs;

class AdminlteComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/components', 'adminLTEComponents');
        Blade::component('card', Card::class);
        Blade::component('form', Form::class);
        Blade::component('form.input', Input::class);
        Blade::component('form.select', Select::class);
        Blade::component('modal', Modal::class);
        Blade::component('tabs', Tabs::class);
        Blade::component('tabs.option', Option::class);
        Blade::component('tabs.content', Content::class);
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
