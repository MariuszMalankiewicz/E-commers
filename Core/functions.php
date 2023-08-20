<?php

function dd($value)
{
    echo "<pre>";
    echo var_dump($value);
    echo "</pre>";

    die();
}

function checkUri($value)
{
    return ($_SERVER['REQUEST_URI'] === $value);
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require "views/errors/{$code}.view.php";

    die();
}

function authorize(string $condition, string $status)
{
    if(!$condition) 
    {
        abort($status);
    }
}
