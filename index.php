<?php 
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