<?php

require base_path("core/Validation.php");

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
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

        $errors['usernameLength'] = "Nazwa musi posiadać od 3 do 15 znaków";

    }

    if(Validation::strlenString($formData['email'], 3, 30))
    {

        $errors['emailLength'] = "Email musi posiadać od 3 do 30 znaków";

    }

    if(!Validation::validEmail($formData['email']))
    {

        $errors['emailValid'] = "Nieprawidłowy format email";

    }

    if(Validation::sameDataInDb($formData['email']))
    {

        $errors['emailInDb'] = "Taki email już istnieje";

    }

    if(Validation::strlenString($formData['password'], 3, 30))
    {

        $errors['passwordLength'] = "Hasło musi posiadać od 3 do 30 znaków";

    }

    if(Validation::strlenString($formData['repassword'], 3, 30))
    {

        $errors['repasswordLength'] = "Powtórz Hasło musi posiadać od 3 do 30 znaków";

    }

    if(Validation::differentData($formData['password'], $formData['repassword']))
    {

        $errors['passwordDiffrent'] = "Hasła nie są takie same";

    }

    if(empty($errors))
    {

        $formData['password'] = password_hash($formData['password'], PASSWORD_DEFAULT);

        $config = require base_path("config.php");

        $insertUser = new Database($config['database']);

        $query = 'INSERT INTO `user`(`id`, `username`, `email`, `password`) VALUES (:id, :username, :email, :password)';

        $insertUser->query($query, 
        [
            ':id' => NULL, 
            ':username' => $formData['username'], 
            ':email' => $formData['email'], 
            ':password' => $formData['password']
        ]);

        header("location: /login");

        exit();

    }

}

require base_path("views/auth/registration.view.php");