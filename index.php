<?php

$config = require("config.php");

require("Core/Database.php");

require("Core/functions.php");

$testPDO = new Database($config['database']);

// single record
// $user = $testPDO->query("select * from user where id = 79")->fetch();
// dd($user['email']);

// multiple record
$users = $testPDO->query("select * from user")->fetchAll();
dd($users);

require("Core/router.php");


