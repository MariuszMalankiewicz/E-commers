<?php

require("public/views/partials/head.php");

?>

<div class="flex flex-col items-center justify-center h-screen bg-white">
    <div>
        <h1 class="font-bold text-2xl mb-4">Zaloguj się</h1>
    </div>
    <div class="w-full max-w-xs">
    <form action="" method="post" id="addUser" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" value="<?php if(isset($_POST['logIn'])){ echo $_POST['email'];} ?>" placeholder="Email" required>
        </div>

        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password1">
            Hasło
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" value="<?php if(isset($_POST['logIn'])){ echo $_POST['password'];} ?>" placeholder="******************" minlength="8" maxlength="20" required>
        <?php
            if(isset($_POST['logIn']))
            {
                if($_SESSION["error"] === 'emptyFormData')
                {
                    echo "<p class='block text-red-500 text-sm font-bold mt-1'>Uzupełnij wszystkie pola</p>";
                }
                else if($_SESSION["error"] === 'checkFormatEmail')
                {
                    echo "<p class='block text-red-500 text-sm font-bold mt-1'>Wprowadz poprawny email</p>";
                }
                else if($_SESSION["error"] === 'minLegnthPassword')
                {
                    echo "<p class='block text-red-500 text-sm font-bold mt-1'>za mało znaków</p>";
                }
                else if($_SESSION["error"] === 'maxLegnthPassword')
                {
                    echo "<p class='block text-red-500 text-sm font-bold mt-1'>za dużo znaków</p>";
                }
                else if($_SESSION["error"] === 'uncorrectEmailOrPassword')
                {
                    echo "<p class='block text-red-500 text-sm font-bold mt-1'>Email lub hasło jest nie poprawne</p>";
                }
            }
        ?>
        </div>
        <div class="flex items-center justify-around">
            <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="logIn">
                Zaloguj się
            </button>
            <a class="py-2 px-4" href="/welcome">Powrót</a>
        </div>
    </form>
        
    </div>
</div>



<?php

require("public/views/partials/footer.php");

?>
