<?php

if(isset($_SESSION['userId']))
{
    require("controllers/auth/account/index.php");
}
else
{
    require("views/auth/welcome.view.php");
}
