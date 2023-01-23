<?php 
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
  session_start(); 
  require '../../config/config.php';
  $_SESSION["page_title"] = '2.5';
  $_SESSION["page_header"] = 'Exercise 2.5';
  require HEAD;
?>

<header id="header">
    <a href="<?php echo ROOTURL.'index.php'; ?>">Home</a>
    <?php echo '<h1>'.$_SESSION["page_header"].'</h1>'; ?> 
</header>

<main>

</main>

<?php require FOOTER; ?>