<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$editProduct = $db->query("SELECT `id`, `user_id`, `category`, `name`, `price` FROM `products` WHERE id = :product_id", 

[':product_id' => $_GET['id']])

->findOrFail();

authorize($editProduct['user_id'] === $_SESSION['userId']['id']);

view('products/edit.view.php',
    [
        'heading' => 'Edytuj produkt',
        'editProduct' => $editProduct,
        $errors = [],
    ]
);