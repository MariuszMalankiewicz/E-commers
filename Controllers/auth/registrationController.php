<?php
ob_start();

require("public/views/auth/registration.view.php");

require("Core/validation.php");


class RegistrationLogic
{

    public function addUser()
    {

        $_SESSION['message'] = '';

        if(isset($_POST['registration']))
        {
            $formData = 
            [

                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'repassword' => $_POST['repassword']
                
            ];

            empty(Validation::trimData($formData)) ? $_SESSION['message'] = "Uzupełnij wszystkie pola" : '';
            Validation::strlenString($formData['username'], 3, 15) ? $_SESSION['message'] = "Nazwa musi posiadać od 3 do 15 znaków" : '';
            Validation::strlenString($formData['email'], 3, 30) ? $_SESSION['message'] = "Email musi posiadać od 3 do 30 znaków" : '';
            !Validation::validEmail($formData['email']) ? $_SESSION['message'] = "Nieprawidłowy format email" : '';
            Validation::sameDataInDb($formData['email']) ? $_SESSION['message'] = "Taki email już istnieje" : '';
            Validation::strlenString($formData['password'], 3, 30) ? $_SESSION['message'] = "Hasło musi posiadać od 3 do 30 znaków" : '';
            Validation::strlenString($formData['repassword'], 3, 30) ? $_SESSION['message'] = "Powtórz Hasło musi posiadać od 3 do 30 znaków" : '';
            Validation::differentData($formData['password'], $formData['repassword']) ? $_SESSION['message'] = "Hasła nie są takie same" : '';


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
    
    }

}

$newUser = new RegistrationLogic();

$newUser->addUser();