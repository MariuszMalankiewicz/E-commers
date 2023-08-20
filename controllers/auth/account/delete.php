<?php

$productId = $_GET['id'];

$config = require base_path("config.php");

$deleteProduct = new Database($config['database']);

$deleteProduct->query("DELETE FROM `products` WHERE id = :product_id", 

[':product_id' => $productId]);

header("location: /account");

exit();