<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PHP coding - activities</title>
  <link rel="icon" href="https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico" type="image/x-icon">
  <link rel="stylesheet" href="scss/style.css" type="text/css">
</head><!-- END of <head> section ======================================================================================= -->

<body>
<?php
  echo "<h2>Activity#1 - Chessboard</h2>";
  $tablelength = 8;
  echo "<div class=\"board\" style=\"
        display: grid;
        grid-template-rows: repeat(1fr, $tablelength);
        grid-template-columns: repeat(1fr, $tablelength);
        \">";

  for($i = 1, $col = 1, $row = 1; $i <= ($tablelength * $tablelength); $i++){
    if($col > $tablelength){
      $row++;
      $col = 1;
      echo "<div class=\"box\" style=\"
            grid-area: $row / $col / " . ($row + 1) . " / " . ($col + 1);
      echo ";\">$i</div>";
      $col++;
    } else{
      echo "<div class=\"box\" id=\"box" . $i . "\" style=\"
            grid-area: $row / $col / " . ($row + 1) . " / " . ($col + 1);
      echo ";\">$i</div>";
      $col++;
    }
  }
  echo "</div>";
?>

<?php
  echo "<h2>Activity#2 - variable swapping</h2>";
  $a = 1;
  $b = 2;
  $c = $a;
  $a = $b;
  $b = $c;

  echo "a: $a" . '<br>';
  echo "b: $b" . '<br>';
  ?>

<?php
  echo "<h2>Activity#3 - swapping w/o using variables</h2>";
  $a = 2;
  $b = 3;
  $a ^= $b ^= $a ^= $b;

  echo "a: $a" . '<br>';
  echo "b: $b" . '<br>';

  ?>

<?php
echo "<h2>Activity#4 - ARRAYS</h2>";
$arrayindex = array('maikeru', 'je-muzu', 'arubatana');
$arrayassoc = array('name' =>'maikeru', 'name2' => 'je-muzu', 'lastname' => 'arubatana');
$arrayindex01 = array(1, 2, 3, 4, 5);


echo $arrayindex[1] . '<br>';
echo $arrayassoc['name'] . '<br>';

// foreach($arrayindex01 as $age){
//   echo $arrayindex01 . '<br>';
//   echo $age . '<br>';
// }

?>

<?php
  $items = [
    ['product' => 'Lenovo laptop', 'price' => 600.00, 'quantity' => 100],
    ['product' => 'ASUS tablet', 'price' => 100.00, 'quantity' => 10],
    ['product' => 'Acer AIO', 'price' => 300.00, 'quantity' => 50],
    ['product' => 'HP laptop', 'price' => 400.00, 'quantity' => 1],
    ['product' => 'Dell desktop', 'price' => 350.00, 'quantity' => 20]
  ]
?>


<ul>
<?php
  foreach($items as $quantities){
    echo '<li>' . $quantities['quantity'] . '</li>';
  }
?>
</ul>
</body>

</html>
<!-- HTML5 Template version 1.5 20171225 ===================-->
<!-- Developer: Michael James Turiano Albatana              -->
<!-- Email: mjtalbatana@gmail.com                           -->
<!-- Github: https://github.com/mjtalbatana                 -->
<!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana      -->
<!-- END OF HTML FILE ======================================-->