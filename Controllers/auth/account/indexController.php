<?php

$config = require("config.php");

$dbh = new Database($config['database']);

$user = $dbh->query("SELECT username, email FROM `user` WHERE id = :id", [':id' => $_SESSION['userId']['id']])->fetchall();

require('public/views/auth/account/index.view.php');