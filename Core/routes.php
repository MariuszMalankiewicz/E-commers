<?php

$routes = [
    '/' => 'Controllers/indexController.php',
    '/login' => 'Controllers/auth/loginController.php',
    '/registration' => 'Controllers/auth/registrationController.php',
    '/dashboard' => 'Controllers/dashboards/indexController.php',
    '/news' => 'Controllers/dashboards/newsController.php',
    '/products' => 'Controllers/dashboards/productsController.php',
    '/contact' => 'Controllers/dashboards/contactController.php'
];