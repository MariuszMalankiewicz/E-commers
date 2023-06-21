<?php
require_once('model/dataBase.php');
require_once('view/head.html');
?>
<div class="w-full h-screen">
    <div class="w-full flex flex-row justify-end content-center bg-gradient-to-r from-cyan-500 to-blue-500">
        <a class="p-3 text-white font-medium" href="view/login.php">Zaloguj się</a>
        <a class="p-3 text-white font-medium" href="view/registration.php">Zarejestruj się</a>
    </div>
    <div>
        <h1 class="text-center mt-4">Witaj!</h1>
    </div>
</div>

<?php
require_once('view/footer.html');
?>
