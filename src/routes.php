<?php

// if lumen, we need to register a different controller.
$class = sprintf(
    'Lolibrary\Health\Controllers\%sHealthCheck@index',
    class_exists('Laravel\Lumen\Application') ? 'Lumen' : 'Laravel'
);

/** @var \Illuminate\Routing\Router $router */
$router->get('/healthz', $class);
