<?php

require("public/views/partials/head.php");

require("public/views/partials/nav.php");

require("public/views/partials/header.php");

$config = require("config.php");

$dbh = new Database($config['database']);

?>

<div class="min-h-auto">
    <main class="overflow-x-hidden">
        <div class="flex flex-col justify-around items-center">
          <?php require("public/views/dashboards/filters.php") ?>
        </div>
        <?php require("public/views/dashboards/products/smartwatch.php"); ?>
        <?php require("public/views/dashboards/products/phone.php"); ?>
  </main>
</div>

<?php

require("public/views/partials/footer.php");

?>