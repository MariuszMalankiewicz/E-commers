<?php

function dd($value)
{
    echo "<pre>";
    echo var_dump($value);
    echo "</pre>";

    die();
}

function base_path(string $path)
{
    return BASE_PATH . $path;
}

function view(string $path, array $attributes = [])
{
    extract($attributes);

    require base_path('/views/' . $path);
}

function checkUri($value)
{
    return ($_SERVER['REQUEST_URI'] === $value);
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require base_path("views/errors/{$code}.view.php");

    die();
}

function authorize(string $condition, string $status)
{
    if(!$condition) 
    {
        abort($status);
    }
}
