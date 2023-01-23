<<<<<<< HEAD
<?php 
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
  session_start(); 
  require '../../config/config.php';
  $_SESSION["page_title"] = '1.2';
  $_SESSION["page_header"] = 'Exercise 1.2';
  require HEAD;
?>

<header id="header">
    <a href="<?php echo ROOTURL.'index.php'; ?>">Home</a>
    <?php echo '<h1>'.$_SESSION["page_header"].'</h1>'; ?> 
</header>

<main>

</main>

<?php require FOOTER; ?>
=======
<?php
    session_start();
?>

<header>
    <a href="">Home</a>
    <h1> <?php $_SESSION["page_header"] ?> </h1>
    <p></p>
    <hr>
</header>
<main>

</main>
<footer>
    <p> <?php echo AUTHOR ?> </p>
    <p> <?php echo GROUP ?> </p>
</footer>
>>>>>>> e61b48a4b71ed1052d08f0ece3001ccdb2b56109
