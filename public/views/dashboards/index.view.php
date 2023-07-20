<?php

require("public/views/partials/head.php");

require("public/views/partials/nav.php");

require("public/views/partials/header.php");

?>

<div class="min-h-auto">
    <main class="overflow-x-hidden">
        <div class="flex flex-col justify-around items-center">

        <!-- FILTER -->

          <?php require("public/views/dashboards/filters.php") ?>

        </div>
     
        <!-- SELECT PRODUCTS -->

        <?php require("public/views/dashboards/products/index.php"); ?>

  </main>
</div>

<?php

require("public/views/partials/footer.php");

?>