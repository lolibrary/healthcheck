<?php

namespace Lolibrary\Health\Controllers;

use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller;

class LumenHealthCheck extends Controller
{
    /**
     * Get the health check endpoint.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new JsonResponse([
            'alive' => true,
        ], 200);
    }
}
