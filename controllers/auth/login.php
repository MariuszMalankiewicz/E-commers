<?php

require("core/Validation.php");

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $formData = 
    [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    if(empty($formData['email']))
    {

        $errors['emptyEmail'] = 'Uzupełnij email';

    }

    if(empty($formData['password']))
    {

        $errors['emptyPassword'] = 'Uzupełnij hasło';

    }

    Validation::trimData($formData);

    if(Validation::strlenString($formData['email'], 3, 30))
    {

        $errors['emailLength'] = "Email musi posiadać od 3 do 30 znaków";

    }

    if(!Validation::validEmail($formData['email']))
    {

        $errors['emailValid'] = "Nieprawidłowy format email";

    }

    if(Validation::strlenString($formData['password'], 3, 30))
    {

        $errors['passwordLength'] = "Hasło musi posiadać od 3 do 30 znaków";

    }

    if(!Validation::passwordVerify($formData['email'], $formData['password']))
    {

        $errors['passwordVeryfy'] = "Email lub hasło jest nie poprawne";

    }

    if(empty($errors))
    {
        $config = require("config.php");

        $dbh = new Database($config['database']);

        $userId = $dbh->query("SELECT id FROM `user` WHERE email = :data", [':data' => $formData['email']])->fetch();

        $_SESSION['userId'] = $userId;

        header("location: /account");

        exit();
        
    }
    
}

require("views/auth/login.view.php");