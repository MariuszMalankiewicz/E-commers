<?php

if(isset($_SESSION['userId']))
{
    require base_path("controllers/auth/account/index.php");
}
else
{
    view("auth/welcome.view.php");
}
