<?php

use Orchestra\Testbench\TestCase;
use Lolibrary\Health\HealthServiceProvider;

class LaravelRouteTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [HealthServiceProvider::class];
    }

    public function testStatusReturnsAValidResponse()
    {
        $response = $this->get('/healthz');

        $response->assertStatus(200);
        $response->assertExactJson(['alive' => true]);
    }
}
