<?php

$routes = [
    '/' => 'Controllers/dashboards/indexController.php',
    '/login' => 'Controllers/auth/loginController.php',
    '/registration' => 'Controllers/auth/registrationController.php',
    '/welcome' => 'Controllers/auth/welcomeController.php',
    '/news' => 'Controllers/dashboards/newsController.php',
    '/contact' => 'Controllers/dashboards/contactController.php',
    '/account' => 'Controllers/auth/account/indexController.php',
    '/logout' => 'Controllers/auth/account/logoutController.php',
];