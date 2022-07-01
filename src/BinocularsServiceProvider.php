<?php

namespace Auncly\Binoculars;

use Illuminate\Support\ServiceProvider;

class BinocularsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'binoculars');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'binoculars');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/Http/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('binoculars.php'),
            ], 'binoculars-config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/binoculars'),
            ], 'binoculars-views');

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/binoculars'),
            ], 'binoculars-assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/binoculars'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'binoculars');

        // Register the main class to use with the facade
        $this->app->singleton('binoculars', function () {
            return new Binoculars;
        });
    }
}
