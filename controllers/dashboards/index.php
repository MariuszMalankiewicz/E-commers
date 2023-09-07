<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$products = $db->query("SELECT `name`, `img`, `price` FROM products")->get();

view("dashboards/index.view.php",
    [
        'heading' => 'Wszystkie produkty',
        'products' => $products
    ]
);