<?php

if(isset($_SESSION['userId']))
{
    require base_path("controllers/auth/account/index.php");
}
else
{
    require base_path("views/auth/welcome.view.php");
}
