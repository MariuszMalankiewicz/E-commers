<?php

use Core\App;
use Core\Database;
use Core\Validation;

$errors = [];

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

if(!empty($errors))
{
    return view('products/create.view.php',
    [
        'heading' => 'Dodaj produkt',
        'errors' => $errors,
    ]
    );
}

$db = App::resolve(Database::class);

$query = 'INSERT INTO `products`(`id`, `user_id`, `category`, `name`, `price`) VALUES (:id, :user_id, :category, :name, :price)';

$db->query($query, 
[
    ':id' => NULL, 
    ':user_id' => $_SESSION['userId']['id'], 
    ':category' => $formData['category'], 
    ':name' => $formData['name'],   
    ':price' => $formData['price']
]);

header("location: /products");

exit();