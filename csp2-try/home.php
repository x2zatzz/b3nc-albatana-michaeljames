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
    <h1>Home</h1>
    <?php
      echo "Welcome " . $_SESSION['current_user'] . "<br>";
    ?>
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
