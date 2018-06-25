<?php

namespace TrySpecter\Specter;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use TrySpecter\Specter\Facades\Specter as SpecterFacade;

class SpecterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = AliasLoader::getInstance();

        $loader->alias('Specter', SpecterFacade::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'specter');

        $this->app->singleton('specter', function () {
            return new Specter();
        });

        $this->publishes([
            __DIR__ . '/config/specter.php' => config_path('specter.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
