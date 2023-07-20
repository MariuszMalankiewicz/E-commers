<?php

require("public/views/partials/head.php");

require("public/views/partials/nav.php");

require("public/views/partials/header.php");

?>

<div class="min-h-auto overflow-x-hidden">
    <main>
        <div class="flex flex-col justify-around items-center">

        <!-- FILTER -->

          <?php require("public/views/dashboards/filters.php") ?>

        </div>
     
        <!-- SELECT PRODUCTS -->

        <?php require("public/views/dashboards/products/products.view.php"); ?>

  </main>
</div>

<?php

require("public/views/partials/footer.php");

?>