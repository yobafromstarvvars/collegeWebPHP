<?php 
  session_start();
  require './config.php';
  require HEAD;
?>


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
