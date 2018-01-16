<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <link rel="icon" href="https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico" type="image/x-icon">
  <link rel="stylesheet" href="scss/style.css" type="text/css">
</head><!-- END of <head> section ======================================================================================= -->

<body>
<?php
  echo '<h2>Activity#1</h2>';
  echo '<h3>Solution#1</h3>';
  for($i = 1; $i <= 10; $i++){
    if($i == 10){
      echo "$i";
    } else{
      echo "$i-";
    }
  }
  echo '<br>';
  echo '<h3>Solution#2(2-variable)</h3>';
  for($i = 1, $echodisplay = ''; $i <= 10; $i++){
    $echodisplay .= $i . '-';
  }
  echo substr($echodisplay, 0, strlen($echodisplay)-1);
  ?>

<?php
  echo '<h2>Activity#2</h2>';
  echo '<h3>Solution#1(sequenced loop)</h3>';
  $echodisplay = '';
  for($i = 1; $i <= 10/2; $i++){
    $echodisplay .= '* ';
  }
  $echodisplay .= "$echodisplay<br>";
  for($i = 1; $i <= 10; $i++){
    echo $echodisplay;
  }
  echo '<h3>Solution#2(nested loop)</h3>';
  $echodisplay2 = '';
  for($j = 1; $j <= 10; $j++){
    $echodisplay = '';
    for($i = 1; $i <= 10; $i++){
      $echodisplay .= '* ';
    }
    echo $echodisplay . '<tr>';
  }
  ?>

<?php
  echo '<h2>Activity#3</h2>';
  echo '<h3>Solution#1(immediate echo)</h3>';
  echo '<table class=\'container\'><tbody>';
  for($i = 1; $i <= 100; $i++){
    if(((($i - 1) % 10) == 0)){
      echo "<tr><td>$i </td>";
    }
    else if(($i % 10) == 0){
      echo "<td>$i </td></tr>";
    } else{
      echo "<td>$i </td>";
    }
  }
  echo '</tbody></table>';
  echo '<h3>Solution#2</h3>';
  // for($i = 1, $echodisplay = ''; $i <= 100; $i++){

  // }
  ?>

<?php
  echo '<h2>Activity#4</h2>';
  for($i = 1, $echodisplay = ''; $i <= 10; $i++){
    $echodisplay .= "* ";
    echo $echodisplay . '<br>';
  }
?>
<?php
  echo '<h2>Activity#5</h2>';
  for($i = 10, $echodisplay = ''; $i >= 1; $i--){
    echo "* ";

  }
?>

<?php
      echo '<h2>Activity#6</h2>';
  for($i = 1, $echodisplay = ''; $i <= 50; $i++){
    $echodisplay .= $i;
    if(($i % 3) == TRUE){
      $echodisplay = "$i Fizz<br>";
    } elseif(($i % 5) == TRUE){
      $echodisplay = "$i Buzz<br>";
      echo "$i Buzz";
    }
    else{
      echo "$i<br>";
    }
    echo $echodisplay;
  }
?>

</body>

</html>
<!-- HTML5 Template version 1.5 20171225 ===================-->
<!-- Developer: Michael James Turiano Albatana              -->
<!-- Email: mjtalbatana@gmail.com                           -->
<!-- Github: https://github.com/mjtalbatana                 -->
<!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana      -->
<!-- END OF HTML FILE ======================================-->