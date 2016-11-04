<?php

namespace Zmop\Zhima;

use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadViewsFrom(__DIR__.'/views', 'Zmop');

        $this->publishes([
//            __DIR__.'/views'             => base_path('resources/views/vendor/toastr'),
            __DIR__.'/config/zmop.php' => config_path('zmop.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['zmop'] = $this->app->share(function ($app) {
            return new ZmopClient($app['session'], $app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['zmop'];
    }
}
