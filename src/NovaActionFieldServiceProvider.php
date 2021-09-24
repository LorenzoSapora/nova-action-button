<?php

namespace LorenzoSapora\NovaActionButton;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class NovaActionFieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-action-button', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-action-button', __DIR__.'/../dist/css/field.css');
        });
    }

    public function register()
    {
        //
    }
}
