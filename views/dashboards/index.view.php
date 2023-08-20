<?php

require base_path("views/partials/head.php");

require base_path("views/partials/nav.php");

require base_path("views/partials/header.php");

?>

<main class="min-h-full w-full bg-white shadow-md px-1 pt-6 my-2 overflow-x-hidden">
    
      <div class="flex flex-col justify-around items-center">

        <?php require base_path("views/dashboards/filters.php"); ?>

      </div>

      <?php require base_path("views/dashboards/products/products.view.php"); ?>

</main>

<?php

require base_path("views/partials/footer.php");

?>