<?php

ob_start();

require("Core/validation.php");

require("public/views/auth/login.view.php");

class loginController
{

    public function logIn()
    {

        if(isset($_POST['logIn']) && !empty($_POST['email']) && !empty($_POST['password']))
        {
            $formData = 
            [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];

            Validation::trimData($formData);

            if(Validation::strlenString($formData['email'], 3, 30))
            {

                $_SESSION['message'] = "Email musi posiadać od 3 do 30 znaków";

            }

            else if(!Validation::validEmail($formData['email']))
            {

                $_SESSION['message'] = "Nieprawidłowy format email";

            }

            else if(!Validation::sameDataInDb($formData['email']))
            {

                $_SESSION['message'] = "Email lub hasło jest nie poprawne";

            }

            else if(Validation::strlenString($formData['password'], 3, 30))
            {

                $_SESSION['message'] = "Hasło musi posiadać od 3 do 30 znaków";

            }

            else if(!Validation::passwordVerify($formData['email'], $formData['password']))
            {

                $_SESSION['message'] = "Email lub hasło jest nie poprawne";

            }

            else
            {

                $_SESSION['message'] = "";
                
            }

            if(empty($_SESSION['message']))
            {
                $config = require("config.php");

                $dbh = new Database($config['database']);
        
                $userId = $dbh->query("SELECT id FROM `user` WHERE email = :data", [':data' => $formData['email']])->fetch();

                $_SESSION['userId'] = $userId;

                header("location: /account");

                ob_end_flush();

                exit();

            }

        }
        else
        {
            $_SESSION['message'] = "Uzupełnij wszystkie pola";
        }
    
    }

}

$user = new loginController();

$user->logIn();