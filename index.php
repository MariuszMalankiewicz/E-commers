<?php
$request  = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require(__DIR__ . "/views/index.view.php");
        break;
    case '' :
        require(__DIR__ . "/views/index.view.php");
        break;
    case '/login' :
        require(__DIR__ . "/views/auth/login.view.php");
        break;
    case '/registration' :
        require(__DIR__ . "/views/auth/registration.view.php");
        break;
    case '/dashboard' :
        require(__DIR__ . "/Controllers/dashboards/index.php");
        break;
    case '/news' :
        require(__DIR__ . "/Controllers/dashboards/news.php");
        break;
    case '/products' :
        require(__DIR__ . "/Controllers/dashboards/products.php");
        break;
    case '/contact' :
        require(__DIR__ . "/Controllers/dashboards/contact.php");
        break;

    default:
        http_response_code(404);
        require(__DIR__ . "/views//errors/404.view.php");
        break;
}

?>

