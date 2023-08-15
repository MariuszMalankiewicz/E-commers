<nav class="bg-gray-800">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col py-4 items-center justify-center sm:flex-row sm:justify-between">
      <div class="flex flex-col items-center sm:flex-row">
          <div class="block mb-4 sm:mb-0 sm:flex-shrink-0">
            <img class="h-20 w-20 sm:h-12 sm:w-12 border rounded-md" src="public/imgs/logo.png" alt="MMExpress logo">
          </div>
          <div>
            <div class="flex flex-col text-center sm:items-baseline sm:space-x-4 sm:flex-row sm:ml-10">
              <a href="/" class="<?= checkUri("/") ? "bg-gray-900 text-white underline" : "text-gray-300"?> rounded-md hover:bg-gray-700 hover:text-white px-4 py-4 text-sm font-medium">Wszystkie produkty</a>
              <a href="/news" class="<?= checkUri("/news") ? "text-gray-100 bg-red-600 underline" : "text-red-500"?> rounded-md hocer:no-underline hover:bg-red-600 hover:text-white px-4 py-4 text-sm font-medium">Nowe produkty!</a>
              <a href="/contact" class="<?= checkUri("/contact") ? "bg-gray-900 text-white underline" : "text-gray-300"?> rounded-md hover:bg-gray-700 hover:text-white px-4 py-4 text-sm font-medium">Kontakt</a>
            </div>
          </div>
      </div>

      <div class="mt-4 sm:mt-0">
        <a href='/welcome' class='bg-blue-700 text-white rounded-md px-4 py-4 text-sm font-medium'>Moje konto</a>
      </div>
      <div class="w-full mt-8 sm:hidden">
        <hr>
      </div>
    </div>
  </div>
  
  <?php
  if(isset($_SESSION['userId']))
  {
    echo "
    <div class='flex flex-col bg-gray-800 w-full text-center sm:flex-row'>
        <a href='/account' class='px-4 py-4 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white block'>Moje oferty</a>
        <a href='/create' class='px-4 py-4 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white block'>Dodaj produkt</a>
        <a href='/setting' class='px-4 py-4 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white block'>Ustawienia</a>
        <a href='/logout' class='px-4 py-4 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white block'>Wyloguj się</a>
    </div>
    ";
  }
  ?>
</nav>


