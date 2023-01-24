<?php 
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
  session_start(); 
  require '../../config/config.php';
  $_SESSION["page_title"] = '1.6';
  $_SESSION["page_header"] = 'Exercise 1.6';
  require HEAD;
?>

<header id="header">
    <a href="<?php echo ROOTURL.'index.php'; ?>">Home</a>
    <?php echo '<h1>'.$_SESSION["page_header"].'</h1>'; ?> 
    <p>Вывести код страницы на саму страницу</p>
</header>

<main>
<embed class="exc6_embed" src="exc6.txt">
</main>

<?php require FOOTER; ?>