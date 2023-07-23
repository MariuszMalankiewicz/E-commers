<?php

ob_start();

require("Core/validation.php");

require("public/views/auth/login.view.php");

class loginController
{

    public function logIn()
    {

        $_SESSION['message'] = '';

        if(isset($_POST['logIn']))
        {
            $formData = 
            [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];

            empty(Validation::trimData($formData)) ? $_SESSION['message'] = "Uzupełnij wszystkie pola" : '';

            Validation::strlenString($formData['email'], 3, 30) ? $_SESSION['message'] = "Email musi posiadać od 3 do 30 znaków" : '';

            !Validation::validEmail($formData['email']) ? $_SESSION['message'] = "Nieprawidłowy format email" : '';

            !Validation::sameDataInDb($formData['email']) ? $_SESSION['message'] = "Email lub hasło jest nie poprawne" : '';

            Validation::strlenString($formData['password'], 3, 30) ? $_SESSION['message'] = "Hasło musi posiadać od 3 do 30 znaków" : '';

            !Validation::passwordVerify($formData['email'], $formData['password']) ? $_SESSION['message'] = "Email lub hasło jest nie poprawne" : '';

            if($_SESSION['message'] === '')
            {

                    header("location: /");

                    ob_end_flush();

                    exit();

            }

        }
    
    }

}

$user = new loginController();

$user->logIn();