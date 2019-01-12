<?php

namespace IntermediaryClub\MortgagePrisoner;

use Illuminate\Support\ServiceProvider;

class MortgagePrisonerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'intermediaryclub');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'MortgagePrisoner');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/Routes/web.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/MortgagePrisoner.php', 'MortgagePrisoner');

        // Register the service the package provides.
        $this->app->singleton('MortgagePrisoner', function ($app) {
            return new MortgagePrisoner;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['MortgagePrisoner'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/MortgagePrisoner.php' => config_path('MortgagePrisoner.php'),
        ], 'MortgagePrisoner.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/intermediaryclub'),
        ], 'MortgagePrisoner.views');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/intermediaryclub'),
        ], 'MortgagePrisoner.views');

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/intermediaryclub'),
        ], 'MortgagePrisoner.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
