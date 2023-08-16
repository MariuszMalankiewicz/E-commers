<?php

require "views/partials/head.php";

require "views/partials/nav.php";

require "views/partials/header.php";

?>

<main class="min-h-full w-full bg-white shadow-md px-1 pt-6 my-2 overflow-x-hidden">
    
      <div class="flex flex-col justify-around items-center">

        <?php require "views/dashboards/filters.php"; ?>

      </div>

      <?php require "views/dashboards/products/products.view.php"; ?>

</main>

<?php

require "views/partials/footer.php";

?>