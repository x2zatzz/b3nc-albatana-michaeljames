<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_validation();
  fn_session_init();
  $_SESSION['webtitle'] = 'Whiskey Web App ';
  ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
  <?php require 'assets/php/navheader.php'?>
  <main>
  <?php require 'assets/php/snackbar.php'?>
  <?php
    echo "こんにちわ！ " . $_SESSION['username'];
  // var_dump($_SESSION);
  ?>
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>