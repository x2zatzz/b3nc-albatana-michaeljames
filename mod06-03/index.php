<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PHP Programming - Expressions</title>
  <link rel="icon" href="https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico" type="image/x-icon">
  <link rel="stylesheet" href="scss/style.css" type="text/css">
</head><!-- END of <head> section ======================================================================================= -->

<body>
<?php

$companytitle = "";
$companytitle = "Tuitt Coding Bootcamp";
echo $companytitle;

$counter = 0;
echo $counter . '<br>';
$counter = $counter + 5;
echo $counter . '<br>';
$counter = $counter - 3;
echo $counter . '<br>';
$counter = $counter * 8;
echo $counter . '<br>';
$counter = $counter / 16;
echo $counter . '<br>';

$row = 12;
$counter .= $row;
echo $counter . '<br>';

$balance = 600;
$deposit = 1000;
if($balance < 100){
  $balance = $balance + $deposit;
}
else{
  echo "Your balance is above threshold of 100<br>";
}
echo "Balance: $balance";

echo '<hr>';

$username = "admin";
$password = "";

if($username == 'admin'){
  echo 'username: ADMIN' . '<br>';
} else{
  echo 'username: ' . $username . '<br>';
}

$number01 = 1;
$number02 = 2;
if($number01 > $number02) echo "$number01 is greater than $number02";
if($number01 < $number02) echo "$number01 is less than $number02";
if($number01 == $number02) echo "$number01 is equal to $number02";
?>





</body>

</html>
<!-- HTML5 Template version 1.5 20171225 ===================-->
<!-- Developer: Michael James Turiano Albatana              -->
<!-- Email: mjtalbatana@gmail.com                           -->
<!-- Github: https://github.com/mjtalbatana                 -->
<!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana      -->
<!-- END OF HTML FILE ======================================-->