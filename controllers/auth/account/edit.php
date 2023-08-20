<?php

$heading = "Edytuj produkt";

$productId = $_GET['id'];

$config = require base_path("config.php");

$dbh = new Database($config['database']);

$editProduct = $dbh->query("SELECT `user_id`, `category`, `name`, `price` FROM `products` WHERE id = :product_id", 

[':product_id' => $productId])

->findOrFail();

authorize($editProduct['user_id'] === $_SESSION['userId']['id'], Response::FORBIDDEN);

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

        $dbh = new Database($config['database']);

        $updateProduct = new Database($config['database']);

        $query = 'UPDATE `products` SET `category`=:category,`name`=:name, `price`=:price WHERE id= :id';

        $updateProduct->query($query, 
        [
            ':category' => $formData['category'], 
            ':name' => $formData['name'],
            ':price' => $formData['price'],
            ':id' => $productId,
        ]);

        header("location: /account");

        exit();
        
    }
}

require base_path('views/auth/account/edit.view.php');