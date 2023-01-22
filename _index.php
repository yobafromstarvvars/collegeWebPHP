<header id="header">
    <a href="">Home</a>
    <?php echo '<h1>'.$_SESSION["page_header"].'</h1>'; ?> 
    <p class="header-date">date</p>
</header>

<main>
  <h2>Content:</h2>
  <table>
    <?php 
      // Generate content list. $chapters is in config.php
      foreach($chapters as $chapterNum => $chapter) {
        echo '<tr>
                <th colspan="2">'.key($chapter)[0].'</th>
              </tr>';
        foreach($chapter as $subchapter_num => $subchapter){
          echo '<tr class="subchapter-list-item">
                  <td>'.$subchapter.'</td>
                  <td>not finished</td>
                </tr>'; 
        }
      }
    ?>
  </table>
</main>

<footer id="footer">
    <p> <?php echo AUTHOR ?> </p>
    <p> <?php echo GROUP ?> </p>
</footer>
