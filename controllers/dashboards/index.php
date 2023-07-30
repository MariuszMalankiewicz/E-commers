<?php

$heading = "Wszystkie produkty";

$config = require("config.php");

$dbh = new Database($config['database']);

// filter metoda get = kategoria

$products = $dbh->query("SELECT `name`, `img`, `rating`, `price` FROM products")->fetchAll();

require("views/dashboards/index.view.php");