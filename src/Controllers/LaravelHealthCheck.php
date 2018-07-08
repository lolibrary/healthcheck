<?php

namespace Lolibrary\Health\Controllers;

use Illuminate\Routing\Controller;

class LaravelHealthCheck extends Controller
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
