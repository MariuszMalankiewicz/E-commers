<?php

$productId = $_GET['id'];

$config = require "config.php";

$deleteProduct = new Database($config['database']);

$deleteProduct->query("DELETE FROM `products` WHERE id = :product_id", 

[':product_id' => $productId]);

header("location: /account");

exit();