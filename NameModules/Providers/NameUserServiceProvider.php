<?php

namespace Nameuser\NameModules\Providers;

use Illuminate\Support\ServiceProvider;

class NameUserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/../Routes/NameModules_Routes.php');
        $this->loadMigrationsFrom(__DIR__. '/../Database/Migrations');
        $this->loadFactoriesFrom(__DIR__ . '/../Database/Factories');
        $this->loadViewsFrom(__DIR__ . "/../Resources/Views", "NameModules");
        $this->loadJsonTranslationsFrom(__DIR__ . "/../Resources/Lang");
    }
}
