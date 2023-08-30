<?php

$router->get('/', 'controllers/dashboards/index.php');
$router->get('/news', 'controllers/dashboards/news.php');
$router->get('/contact', 'controllers/dashboards/contact.php');

$router->get('/welcome', 'controllers/auth/welcome.php');

$router->get('/login', 'controllers/auth/login.php');
$router->post('/login', 'controllers/auth/login.php');

$router->get('/registration', 'controllers/auth/registration.php');
$router->post('/registration', 'controllers/auth/registration.php');

$router->get('/logout', 'controllers/auth/logout.php');

$router->get('/products', 'controllers/products/index.php');

$router->get('/product/create', 'controllers/products/create.php');
$router->post('/product/create', 'controllers/products/create.php');

$router->get('/product/edit', 'controllers/products/edit.php');
$router->post('/product/edit', 'controllers/products/edit.php');

$router->get('/product/delete', 'controllers/products/delete.php');