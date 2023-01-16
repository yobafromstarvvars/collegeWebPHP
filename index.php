<?php 
  session_start();
  require './config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1>Kungurtsev ISiP-35; 2023; Second term</h1>
      <h2>Content:</h2>
        <?php 
          // Generate content list. $chapters is in config.php
          foreach($chapters as &$chapter) {
            echo '<li>'.$chapter.'</li>';
            foreach($chapter as &$subchapter){
              echo '<li>'.$subchapter.'</li>'; 
            }
          }
        ?>
    </main>

  </body>
</html>
