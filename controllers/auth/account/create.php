<?php

$heading = "Dodaj produkt";

require base_path('core/Validation.php');

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $formData = 
    [
        'name' => $_POST['name'],
        'category' => $_POST['category'],
        'price' => $_POST['price'],
    ];

    Validation::trimData($formData);

    if(Validation::strlenString($formData['name'], 3, 50))
    {

        $errors['nameLength'] = 'Nazwa musi posiadać od 3 do 50 znaków';

    }

    if(empty($formData['price']))
    {

        $errors['priceLength'] = 'Cena nie może być mniejsza niż 0';

    }

    if(empty($errors))
    {

        $config = require("config.php");

        $insertProduct = new Database($config['database']);

        $query = 'INSERT INTO `products`(`id`, `user_id`, `category`, `name`, `price`) VALUES (:id, :user_id, :category, :name, :price)';

        $insertProduct->query($query, 
        [
            ':id' => NULL, 
            ':user_id' => $_SESSION['userId']['id'], 
            ':category' => $formData['category'], 
            ':name' => $formData['name'],
            ':price' => $formData['price']
        ]);

        header("location: /account");

        exit();
        
    }
}

require base_path('views/auth/account/create.view.php');