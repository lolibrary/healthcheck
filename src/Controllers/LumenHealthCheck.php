<?php

namespace Lolibrary\Health\Controllers;

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
        return response()->json([
            'alive' => true,
        ], 200);
    }
}
