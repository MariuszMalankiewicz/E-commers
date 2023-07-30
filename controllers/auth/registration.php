<?php

ob_start();

require("views/auth/registration.view.php");

require("core/validation.php");


class RegistrationController
{

    public function addUser()
    {
        if(isset($_POST['registration']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repassword']))
        {
            $formData = 
            [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'repassword' => $_POST['repassword']
            ];

            Validation::trimData($formData);

            if(Validation::strlenString($formData['username'], 3, 15))
            {
                $_SESSION['message'] = "Nazwa musi posiadać od 3 do 15 znaków";
            }

            else if(Validation::strlenString($formData['email'], 3, 30))
            {
                $_SESSION['message'] = "Email musi posiadać od 3 do 30 znaków";
            }

            else if(!Validation::validEmail($formData['email']))
            {
                $_SESSION['message'] = "Nieprawidłowy format email";
            }
            
            else if(Validation::sameDataInDb($formData['email']))
            {
                $_SESSION['message'] = "Taki email już istnieje";
            }

            else if(Validation::strlenString($formData['password'], 3, 30))
            {
                $_SESSION['message'] = "Hasło musi posiadać od 3 do 30 znaków";
            }

            else if(Validation::strlenString($formData['repassword'], 3, 30))
            {
                $_SESSION['message'] = "Powtórz Hasło musi posiadać od 3 do 30 znaków";
            }

            else if(Validation::differentData($formData['password'], $formData['repassword']))
            {
                $_SESSION['message'] = "Hasła nie są takie same";
            }

            else
            {
                $_SESSION['message'] = "";
            }

            if($_SESSION['message'] === '')
            {
                $formData['password'] = password_hash($formData['password'], PASSWORD_DEFAULT);

                $config = require("config.php");

                $InsertUser = new Database($config['database']);

                $query = 'INSERT INTO `user`(`id`, `username`, `email`, `password`) VALUES (:id, :username, :email, :password)';

                $InsertUser->query($query, 
                [
                    ':id' => NULL, 
                    ':username' => $formData['username'], 
                    ':email' => $formData['email'], 
                    ':password' => $formData['password']
                ]);

                    header("location: /login");

                    ob_end_flush();

                    exit();
            }

        }
        
        else
        {
            $_SESSION['message'] = 'Uzupełnij wszystkie pola';
        }
    
    }

}

$newUser = new RegistrationController();

$newUser->addUser();