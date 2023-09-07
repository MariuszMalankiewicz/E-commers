<?php

use Core\App;
use Core\Database;
use Core\Validation;

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $formData = 
    [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    Validation::trimData($formData);

    if(!Validation::passwordVerify($formData['email'], $formData['password']))
    {

        $errors['passwordVeryfy'] = "Email lub hasło jest nie poprawne";

    }

    if(empty($errors))
    {
        $db = App::resolve(Database::class);

        $userId = $db->query("SELECT id FROM `users` WHERE email = :data", [':data' => $formData['email']])->find();

        $_SESSION['userId'] = $userId;

        header("location: /products");

        exit();
    }
    
}

view("auth/login.view.php",
    [
        'errors' => $errors,
    ]
);