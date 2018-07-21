<?php

use Lolibrary\Health\HealthServiceProvider;

class LumenRouteTest extends Laravel\Lumen\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        $app = new Laravel\Lumen\Application;
        $app->register(HealthServiceProvider::class);

        return $app;
    }

    public function testStatusReturnsAValidResponse()
    {
        $this->get('/healthz')
            ->seeStatusCode(200)
            ->seeJsonEquals(['alive' => true]);
    }
}
