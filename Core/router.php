<?php
require("routes.php");

$path = parse_url($_SERVER['REQUEST_URI'])["path"];

function routeToController($path, $routes){
(array_key_exists($path, $routes)) ? require $routes[$path] : abort(404);
}

function abort($code){
    http_response_code($code);

    require "Controllers/errors/{$code}Controller.php";

    die();
}

routeToController($path, $routes);