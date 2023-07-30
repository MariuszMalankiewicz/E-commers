<?php

require("views/partials/head.php");

require("views/partials/nav.php");

require("views/partials/header.php");

?>

<div class="min-h-auto overflow-x-hidden">
    <main>
        <div class="flex flex-col justify-around items-center">

        <!-- FILTER -->

          <?php require("views/dashboards/filters.php") ?>

        </div>
     
        <!-- SELECT PRODUCTS -->

        <?php require("views/dashboards/products/products.view.php"); ?>

  </main>
</div>

<?php

require("views/partials/footer.php");

?>