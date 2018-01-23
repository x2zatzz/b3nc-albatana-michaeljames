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
      <input type="text" name="username" placeholder="enter a registered username">
      <label for="password">Password: </label>
      <input type="password" name="password" placeholder="enter your password">
      <label for="passwordconfirm">Password: </label>
      <input type="password" name="passwordconfirm" placeholder="re-enter your password">
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="enter your name" >
      <label for="email">Email: </label>
      <input type="email" name="email" placeholder="enter your email">
      <!-- <label for="account-role">user</label>
      <input type="radio" name="account-role" value="user" checked>
      <label for="account-role">admin</label>
      <input type="radio" name="account-role" value="admin"> -->
      <input type="submit" value="Sign Up">
    </form>
    <!-- <?php var_dump($_SESSION)?> -->
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
