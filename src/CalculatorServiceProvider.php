<?php

namespace Dx\Dxc;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
            // register our controller
    $this->app->make('Devdojo\Calculator\CalculatorController');
      $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
         include __DIR__.'/routes.php';
    }
}
