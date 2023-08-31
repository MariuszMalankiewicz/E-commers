<?php

use Core\Database;

$product_id = $_POST['id'];

$config = require base_path("config.php");

$db = new Database($config['database']);

$product = $db->query("SELECT * FROM products WHERE id = :product_id", 

['product_id' => $product_id])->findOrFail();

authorize($product['user_id'] === $_SESSION['userId']['id']);

$db->query("DELETE FROM `products` WHERE id = :product_id", [
    'product_id' => $product_id
]);

header("location: /products");

exit();


