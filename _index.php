<main>
  <h1>Kungurtsev ISiP-35; 2023; Second term</h1>
  <h2>Content:</h2>
  <?php 
    // Generate content list. $chapters is in config.php
    foreach($chapters as $chapter_num => $chapter) {
      echo '<li><b>'.$chapter_num.'</b></li>';
      foreach($chapter as $subchapter_num => $subchapter){
        echo '<li>'.$subchapter.'</li>'; 
      }
    }
  ?>
</main>
