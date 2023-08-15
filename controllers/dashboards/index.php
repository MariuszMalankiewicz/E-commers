<?php

$heading = "Wszystkie produkty";

$config = require("config.php");

$dbh = new Database($config['database']);

$products = $dbh->query("SELECT `name`, `img`, `price` FROM products")->fetchAll();

require("views/dashboards/index.view.php");