<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
<?php require 'assets/php/navheader.php'?>
  <main>
    <?php include 'assets/php/snackbar.php' ?>
    <form action="auth.php" method="post" id="signinform">
      <label for="username">Username: </label>
      <input type="text" name="username" placeholder="enter a registered username" id="username">
      <label for="password">Password: </label>
      <input type="password" name="password" placeholder="enter your password">
      <input type="submit" value="Sign In">
    </form>
    <!-- <?php var_dump($_SESSION)?> -->
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
