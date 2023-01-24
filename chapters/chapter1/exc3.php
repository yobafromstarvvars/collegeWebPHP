<?php 
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
  session_start(); 
  require '../../config/config.php';
  $_SESSION["page_title"] = '1.3';
  $_SESSION["page_header"] = 'Exercise 1.3';
  require HEAD;
?>

<header id="header">
    <a href="<?php echo ROOTURL.'index.php'; ?>">Home</a>
    <?php echo '<h1>'.$_SESSION["page_header"].'</h1>'; ?> 
    <p>Перевести 1000 долларов в юани через рубли</p>
</header>

<main>
  <?php
    $exc_rate_1USD_RUB = 78.9;
    $exc_rate_1RUB_CHY = 0.08;
    $exc_rate_1USD_CHY = $exc_rate_1USD_RUB * $exc_rate_1RUB_CHY;
  ?>
  <table class="exc3_exch_table">
    <tr> <td colspan="2">Курс обмена</td> <tr>
    <tr> 
      <td>1 USD</td>
      <td><?php echo $exc_rate_1USD_RUB; ?> RUB</td>
    </tr>
    <tr> 
      <td>1 RUB</td>
      <td><?php echo $exc_rate_1RUB_CHY; ?> RUB</td>
    </tr>
  </table>
  <p>1 USD = <?php echo $exc_rate_1USD_CHY; ?> CHY</p>
  <p>1000 USD = <?php echo $exc_rate_1USD_CHY*1000; ?> CHY</p>
</main>

<?php require FOOTER; ?>