<?php

$routes = require "routes.php";

$path = parse_url($_SERVER['REQUEST_URI'])["path"];

function routeToController($path, $routes)
{
    array_key_exists($path, $routes) ? require $routes[$path] : abort();
}

routeToController($path, $routes);