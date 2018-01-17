<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TEMPLATE</title>
  <link rel="icon" href="https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/scss/style.css" type="text/css">
</head><!-- END of <head> section ======================================================================================= -->

<body>
  <!-- <?php
    echo "<h3>Activity#1</h3>";
    $username_v = htmlspecialchars($_GET['username']);
    $password_v = htmlspecialchars($_GET['password']);
    $japanesename_v = htmlspecialchars($_GET['japanesename']);
    $completename_v = htmlspecialchars($_GET['completename']);
    echo $username_v . breakFN();
    echo $password_v . breakFN();
    echo $japanesename_v . breakFN();
    echo $completename_v . breakFN();
    ?> -->

  <?php
    echo "<h3>Activity#2</h3>";
  ?>

  <form method="POST" action="assets/php/validate.php">
    <label for="username">username</label>
    <input type="text" name="username">
    <label for="password">password</label>
    <input type="password" name="password">
    <label for="firstname">firstname</label>
    <input type="text" name="firstname">
    <input type="submit" name="submit" value="submit">
  </form>
  <?php
    function breakFN(){
      echo '<br>';
  }
  ?>
  <?php
  // include 'https://github.com/mjtalbatana/dev-template/blob/master/php/signature.php';
  // include 'https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico';
  include 'https://raw.githubusercontent.com/mjtalbatana/dev-template/master/php/signature.php';
  ?>
</body>

</html>
