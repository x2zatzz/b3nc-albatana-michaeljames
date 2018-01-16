<?php
  require_once 'assets/php/ref.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Twelve Days of Christmas - <?php echo getTitle(); ?></title>
  <link rel="icon" href="https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/scss/style.css" type="text/css">
</head><!-- END of <head> section ======================================================================================= -->

<body onload="onloadScript()">
  <main id="main">
  <?php
    getLyrics();
  ?>
  </main>
  <script language="javascript" src="assets/js/script.js"></script>
</body>

</html>