<?php
    require("public/views/partials/head.php");
    require("public/views/partials/nav.php");
?>

<main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <p class="text-base font-semibold text-indigo-600">Witaj!</p>
    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Jesteś tutaj nowy?</h1>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="/registration" class="rounded-md bg-blue-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Załóż konto</a>
      <p>lub</p>
      <a href="/login" class="text-sm font-semibold text-blue-700 underline">Zaloguj się</a>
    </div>
  </div>
</main>

<?php

  require("public/views/partials/footer.php");

?>