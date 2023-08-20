<?php

session_start();

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "core/functions.php";

require base_path("core/Database.php");

require base_path("Response.php");

require base_path("core/router.php");