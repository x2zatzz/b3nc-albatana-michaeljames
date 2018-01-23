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
    <form action="reg.php" method="post" id="signupform">
      <label for="username">Username: </label>
      <input type="text" name="username" value="mjtalbatana">
      <label for="password">Password: </label>
      <input type="password" name="password" value="password">
      <label for="name">Name:</label>
      <input type="text" name="name"value="maikerujeimuzu" >
      <label for="email">Email: </label>
      <input type="email" name="email" value="mjtalbatana@gmail.com">
      <input type="submit" value="Sign Up">
    </form>
    <?php var_dump($_SESSION)?>
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
