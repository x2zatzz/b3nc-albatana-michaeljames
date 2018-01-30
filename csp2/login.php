<?php session_start()?>
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
      <h1>Log In</h1>
      <form id="login" action="assets/php/authenticate.php" method="post">
      <label for="username">username</label>
      <input type="text" name="username" placeholder="please enter user ID">
      <label for="password">password</label>
      <input type="password" name="password" placeholder="please enter password">
      <input type="submit" value="Sign In">
    </form>
  </main>
  <footer>
    <div class="console">
      <span>
        <?php echo $_SESSION['message']?>
      </span>
    </div>
    <?php include 'assets/php/footer.php'?>
  </footer>
  <?php require 'assets/php/scripts.php'?>
</body>

</html>
