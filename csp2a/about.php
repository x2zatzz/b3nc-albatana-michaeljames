<?php
  session_start();
  print_r($_SERVER['PHP_SELF']);
  print_r($_SESSION['currentpage']);
  print_r($_SESSION['prevpage']);
  require 'assets/php/phpfunctions.php';
  fn_pagecheck();

?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
<?php require 'assets/php/navheader.php'?>

<main>
<?php require 'assets/php/snackbar.php'?>
</main>
<?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
