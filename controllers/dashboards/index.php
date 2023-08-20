<?php

$config = require base_path("config.php");

$dbh = new Database($config["database"]);

$products = $dbh->query("SELECT `name`, `img`, `price` FROM products")->get();

view("dashboards/index.view.php",
    [
        'heading' => 'Wszystkie produkty',
        'products' => $products
    ]
);