<?php

namespace TrySpecter\Specter;

use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use TrySpecter\Specter\Facades\Specter as SpecterFacade;
use TrySpecter\Specter\Middleware\SpecterAuthenticated;

class SpecterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @param Router $router
     * @param Dispatcher $dispatcher
     */
    public function boot(Router $router, Dispatcher $dispatcher)
    {
        $loader = AliasLoader::getInstance();

        $loader->alias('Specter', SpecterFacade::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'specter');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'specter');

        $this->loadRoutesFrom(__DIR__ . '/../routes/specter.php');

        $router->aliasMiddleware('specter.user', SpecterAuthenticated::class);

        $this->app->singleton('specter',
            function () {
                return new Specter();
            });

        $this->publishes([__DIR__ . '/../config/specter.php' => config_path('specter.php'),]);
        $this->publishes([__DIR__ . '/../resources/assets' => public_path('vendor/specter')], 'specter-assets');

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
