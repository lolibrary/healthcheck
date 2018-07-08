<?php

namespace Lolibrary\Health;

use Lolibrary\Health\Commands;
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
        $this->commands([
            Commands\DatabaseWaitCommand::class,
            Commands\RedisWaitCommand::class,
        ]);

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
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
}
