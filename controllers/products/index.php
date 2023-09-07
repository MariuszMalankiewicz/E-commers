<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$userProducts = $db->query("SELECT `id`, `category`, `name`, `price` FROM `products` WHERE user_id = :user_id", 

[':user_id' => $_SESSION['userId']['id']])

->get();

view('products/index.view.php',
    [
        'heading' => 'Moje oferty',
        'userProducts' => $userProducts,
    ]
);