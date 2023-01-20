<?php 
  session_start();
  require './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php echo $_SESSION["page_title"] ?>
  </title>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
  <?php
    // Change the var when clicking a link
    $_SESSION["page_content"]=$linkto_content;
    require $_SESSION["page_content"];
  ?>
</body>
</html>
