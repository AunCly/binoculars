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
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'sqlite-visualizer');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'sqlite-visualizer');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/Http/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('sqlite-visualizer.php'),
            ], 'config');

            // Publishing the views.
//            $this->publishes([
//                __DIR__.'/../resources/views' => resource_path('views/vendor/sqlite-visualizer'),
//            ], 'views');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/sqlite-visualizer'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/sqlite-visualizer'),
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
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'sqlite-visualizer');

        // Register the main class to use with the facade
        $this->app->singleton('sqlite-visualizer', function () {
            return new Binoculars;
        });
    }
}
