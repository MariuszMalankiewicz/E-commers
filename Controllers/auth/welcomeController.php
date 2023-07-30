<?php

if(isset($_SESSION['userId']))
{
    require("Controllers/auth/account/indexController.php");
}
else
{
    require("public/views/auth/welcome.view.php");
}
