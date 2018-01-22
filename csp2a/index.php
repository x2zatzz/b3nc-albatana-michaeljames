<?php
  session_start();
  // require 'assets/php/phpfunctions.php';
  // fn_pagecheck();
  // $_SESSION['username'] = "admin";
  $_SESSION['webtitle'] = 'Whiskey Web App ';

  print_r($_SESSION['currentpage']);
  print_r($_SESSION['prevpage']);
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
