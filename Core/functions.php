<?php

function dd($value){
    echo "<pre>";
    echo var_dump($value);
    echo "</pre>";

    die();
}

function checkUri($value){
    return ($_SERVER['REQUEST_URI'] === $value);
}

