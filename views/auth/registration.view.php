<?php

require("views/partials/head.php");

require("Core/auth/registrationLogic.php");


$new = new RegistrationLogic();
$new->AddUser();
?>

<div class="flex flex-col items-center justify-center h-screen bg-white">
    <div>
        <h1 class="font-bold text-2xl mb-4">Zarejestruj się</h1>
    </div>
    <div class="w-full max-w-xs">
    <form action="" method="post" id="addUser" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Nazwa
        </label>
        <input 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            type="text" 
            name="username" 
            value="<?php if(isset($_POST['registration'])){ echo $_POST['username'];} ?>" 
            placeholder="Username" 
        >
        <?php
            // if(isset($_POST['registration']))
            // {
            //     if($_SESSION["error"] === 'sameUserNameInDb')
            //     {
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>Taki uzytkownik już istnieje</p>";
            //     }
            //     else if($_SESSION['error'] === 'minLegnthUserName'){
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>Za mało znaków</p>";
            //     }
            //     else if($_SESSION['error'] === 'maxLegnthUserName'){
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>Za dużo znaków</p>";
            //     }
            // }
        ?>
        </div>

        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
        </label>
        <input 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            type="email" 
            name="email" 
            value="<?php if(isset($_POST['registration'])){ echo $_POST['email'];} ?>" 
            placeholder="Email" 
        >
        <?php
            // if(isset($_POST['registration']))
            // {
            //     if($_SESSION["error"] === 'checkFormatEmail')
            //     {
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>Wprowadz poprawny email</p>";
            //     }
            //     else if($_SESSION["error"] === 'sameEmailInDb')
            //     {
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>Taki email już istnieje</p>";
            //     }
            // }
        ?>
        </div>

        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password1">
            Hasło
        </label>
        <input 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
            type="password" 
            name="password" 
            value="<?php if(isset($_POST['registration'])){ echo $_POST['password'];} ?>" 
            placeholder="******************" 

        >
        </div>

        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Powtórz Hasło
        </label>
        <input 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
            type="password" 
            name="repassword" 
            value="<?php if(isset($_POST['registration'])){ echo $_POST['repassword'];} ?>" 
            placeholder="******************" 

        >
        <?php
            // if(isset($_POST['registration']))
            // {
            //     if($_SESSION["error"] === 'emptyFormData'){
            //         echo "<p class='block text-red-500 text-sm font-bold'>Uzupełnij wszystkie pola</p>";
            //     }
            //     else if($_SESSION["error"] === 'minLegnthPassword')
            //     {
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>za mało znaków</p>";
            //     }
            //     else if($_SESSION["error"] === 'maxLegnthPassword')
            //     {
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>za dużo znaków</p>";
            //     }
            //     else if($_SESSION["error"] === 'samePassword')
            //     {
            //         echo "<p class='block text-red-500 text-sm font-bold mt-1'>hasła nie są takie same</p>";
            //     }
            // }
        ?>
        </div>
        
        <div class="flex items-center justify-around">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="registration">
                Zarejestruj się
            </button>
            <a class="py-2 px-4" href="/">Powrót</a>
        </div>
    </form>
        
    </div>
</div>

<?php
require("views/partials/footer.php");
?>
