<?php
  echo "maikeru";
  $name = "maikeruje-muzu";
  print "Good evening, $name";
  echo "Today is " . date("F j, Y") . ".";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TEMPLATE</title>
  <link rel="icon" href="https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico" type="image/x-icon">
  <link rel="stylesheet" href="scss/style.css" type="text/css">
</head><!-- END of <head> section ======================================================================================= -->

<body>
  <br>
  <?php
  $name = "マイケル";
  echo "こんにちはマイケル!";
  echo '$name';
  echo "$name";
  echo '<br>';
  $username = "マイケル";
  echo $username;
  echo '<br>';
  $username = 'maikeru<br>';
  $current_user = $username;
  echo $current_user;
  echo 'Buzz Lightyear once said: "You\'re a toy!"<br>';
  echo 'You deleted c:\\*.*<br>';
  echo 'You deleted c:\*.*<br>';
  echo 'You deleted c:\\\*.*<br>';

  $stringdata = 'you deleted c:\\*.*<br>';
  echo $stringdata;
  echo addslashes($stringdata);
  echo addslashes('you deleted c:\\*.*<br>');
  $numberdata1 = 7;
  $numberdata2 = 0.77;
  $sum = $numberdata1 + $numberdata2;
  $diff = $numberdata1 - $numberdata2;
  $mult = $numberdata1 * $numberdata2;
  $div = $numberdata1 / $numberdata2;
  echo 'sum: ' . $sum . "<br>";
  echo 'difference: ' . $diff . "<br>";
  echo 'product: ' . $mult . "<br>";
  echo 'quotient: ' . $div . "<br>";

  $arraydata1 = array('maikeru', 'je-muzu', 'ruan');

  echo $arraydata1[1];
  echo '<br>';
  
  $arraydata2 = array(1,2,3,4,5);
  echo $arraydata2[1];
  echo '<br>';
  echo $arraydata2[0] + $arraydata2[1];
  echo '<br>';

  define("USER_NAME", 'maikeru');
  echo USER_NAME;
  ?>


</body>

</html>
<!-- HTML5 Template version 1.5 20171225 ===================-->
<!-- Developer: Michael James Turiano Albatana              -->
<!-- Email: mjtalbatana@gmail.com                           -->
<!-- Github: https://github.com/mjtalbatana                 -->
<!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana      -->
<!-- END OF HTML FILE ======================================-->