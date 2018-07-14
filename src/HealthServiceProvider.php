<?php

namespace Lolibrary\Health;

use Lolibrary\Health\Commands;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class HealthServiceProvider extends ServiceProvider
{
    /**
     * Boot this service provider.
     *
     * @return void
     */
    public function boot()
    {
        $commands = [
            Commands\DatabaseWaitCommand::class,
            Commands\RedisWaitCommand::class,
        ];

        $this->commands($commands);

        if (! $this->app->routesAreCached()) {
            $this->routes();
        }
    }

    /**
     * Register this service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Load the routes for this application.
     *
     * @return void
     */
    public function routes()
    {
        $lumen = class_exists('Laravel\\Lumen\\Application');
        $router = $lumen ? $this->app->router : $this->app['router'];

        require __DIR__ . '/routes.php';
    }
}
