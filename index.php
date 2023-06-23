<?php

$request  = $_SERVER['REQUEST_URI'];

define('APP_NAME', dirname(__FILE__));



switch ($request) {
    case '/' :
        require_once(APP_NAME . "/view/app.php");
        break;
    case '' :
        require_once(APP_NAME . "/view/app.php");
        break;
    case '/login' :
        require_once(APP_NAME . "/view/login.php");
        break;
    case '/registration' :
        require_once(APP_NAME . "/view/registration.php");
        break;
    default:
        http_response_code(404);
        require_once(APP_NAME . "/view/404.php");
        break;
}

?>

