<?php

$routes = require base_path('routes.php');

$path = parse_url($_SERVER['REQUEST_URI'])["path"];

function routeToController($path, $routes)
{
    array_key_exists($path, $routes) ? require base_path($routes[$path]) : abort();
}

routeToController($path, $routes);