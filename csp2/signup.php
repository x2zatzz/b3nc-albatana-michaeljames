<!DOCTYPE html>
<html lang="en">

  <head>
  <?php include 'assets/php/head.php'?>
  <title><?php retrieveTitle()?> | Welcome to Beeer Web App</title>
  </head>
<body>
  <header>
    <?php include 'assets/php/header.php'?>
  </header>
  <main>
    <h1>Signup</h1>
    <form id="signup" action="assets/php/authenticate.php" method="post">
      <label for="username">username</label>
      <input type="text" name="username">
      <label for="firstname">firstname</label>
      <input type="text" name="firstname">
      <label for="lastname">lastname</label>
      <input type="text" name="lastname">
      <label for="password">password</label>
      <input type="password" name="username">
      <label for="confirmpassword">confirm password</label>
      <input type="password" name="confirmpassword">

      <input type="submit" value="Sign Up">
    </form>
  </main>

  <footer>
    <?php include 'assets/php/footer.php'?>
  </footer>
<?php require 'assets/php/scripts.php'?>
</body>

</html>
