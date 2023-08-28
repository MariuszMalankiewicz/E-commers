<?php

use Core\Database;

$config = require base_path("config.php");

$dbh = new Database($config['database']);

$userProducts = $dbh->query("SELECT `id`, `category`, `name`, `price` FROM `products` WHERE user_id = :user_id", 

[':user_id' => $_SESSION['userId']['id']])

->get();

view('auth/account/index.view.php',
    [
        'heading' => 'Moje oferty',
        'userProducts' => $userProducts,
    ]
);