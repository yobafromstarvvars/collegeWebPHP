<?php 
<<<<<<< HEAD
//ini_set( 'error_reporting', E_ALL );
//ini_set( 'display_errors', true );
  session_start(); 
  require './config/config.php';
  require HEAD;
?>

<header id="header">
    <a href="">Home</a>
    <?php echo '<h1>'.$_SESSION["page_header"].'</h1>'; ?> 
</header>

<main>
  <h2>Content:</h2>
  <table class="content_list">
    <tr>
      <th>#</th>
      <th>Excercise</th>
      <th>Status</th>
    </tr>
    <?php 
      // Generate content list. $chapters is in config.php
      foreach($chapters_links as $chapter_num => $chapter) {
        echo '<tr>
                <th rowspan="'.(count($chapter)+1).' colspan="1">'.key($chapter)[0].'</th>
              </tr>';
        foreach($chapter as $subchapter_num => $subchapter){
          // If chapter status isn't stated, catch the error
          try {
            $curr_exc_status = $chapters_status[$chapter_num][$subchapter_num];
          } catch (Exception $e) {
            $curr_exc_status = $other_status;
          }
          // List excercises
          echo '<tr class="subchapter-list-item"> 
            <td>'.$subchapter.'</td>';
          // List excercise status.
          // Change text color depending on the status (3 states)
          if ($curr_exc_status == $finished_status) {
            echo '<td class="finished_status">'.$curr_exc_status.'</td>';
          } elseif ($curr_exc_status == $not_finished_status) {
            echo '<td class="not_finished_status">'.$curr_exc_status.'</td>';
          } else {
            // If status isn't stated, print '$other_status'
            echo '<td class="other_status">';
            if ($curr_exc_status == NULL) {echo $other_status;}
              else {echo $curr_exc_status;}
            echo '</td>';
          }
          echo '</tr>';           
        }
        // Line (border) between chapters
        echo '<tr class="chapter_exercises"><td colspan="3"></td></tr>';
      }
    ?>
  </table>
</main>

<?php require FOOTER; ?>
=======
  ini_set( 'error_reporting', E_ALL );
  ini_set( 'display_errors', true );
  session_start(); 
  require 'config/config.php';
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
  <link rel="stylesheet" href="./assets/styles/style.css">
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
>>>>>>> e61b48a4b71ed1052d08f0ece3001ccdb2b56109
