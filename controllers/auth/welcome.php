<?php

if(isset($_SESSION['userId']))
{
    require base_path("controllers/products/index.php");
}
else
{
    view("auth/welcome.view.php");
}
