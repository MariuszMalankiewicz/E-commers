<?php

$heading = "Wszystkie produkty";

$config = require base_path("config.php");

$dbh = new Database($config["database"]);

$products = $dbh->query("SELECT `name`, `img`, `price` FROM products")->get();

require base_path("views/dashboards/index.view.php");