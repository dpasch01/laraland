<?php

namespace Laraland\Laraland;

use Illuminate\Support\ServiceProvider;

class LaralandServiceProvider extends ServiceProvider{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
      require __DIR__.'/routes.php';
      $this->app->make('Laraland\Laraland\Controllers\LaralandController');
    }

}
