<?php 
  session_start();
  require './config.php';
  require HEAD;
?>

  <body>
    <?php
      // Link to a page
      $_SESSION["newsession"]=$value;
    ?>
  </body>
</html>
