<?php
  session_start();
  // require 'assets/php/phpfunctions.php';
  // fn_pagecheck();
  // $_SESSION['username'] = null;
  // $_SESSION['webtitle'] = 'Whiskey Web App ';
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
<?php require 'assets/php/navheader.php'?>
  <main>
    <div id="snackbar">
      <small>
        <?php include 'assets/php/snackbar.php' ?>
        <!-- <?php print_r($_SESSION['snackbar'])?> -->
      </small>
    </div>
    <form action="auth.php" method="post" id="signinform">
      <label for="username">Username: </label>
      <input type="text" name="username" value="mjtalbatana">
      <label for="password">Password: </label>
      <input type="password" name="password" value="password">
      <input type="submit" value="Sign In">
    </form>
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
