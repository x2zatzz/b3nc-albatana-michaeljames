<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PHP Programming - Syntax, Printing, and Variables</title>
  <link rel="icon" href="https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico" type="image/x-icon">
  <link rel="stylesheet" href="scss/style.css" type="text/css">
</head><!-- END of <head> section ======================================================================================= -->

<body>
<?php
  echo '<h2>activity#1</h2><br>';
  $arrayColdplay = array('stars', 'shine', 'yellow');
  echo 'Look at the ' . $arrayColdplay[0] . ',' . '<br>';
  echo 'look how they ' . $arrayColdplay[1] . ' for you,' . '<br>';
  echo 'and everything you do.' . '<br>';
  echo 'Yeah they were all ' . $arrayColdplay[2] . '.' . '<br>';
  echo "Look at the $arrayColdplay[0], look how they $arrayColdplay[1] for you, and everything you do. Yeah they were all $arrayColdplay[2].<br>";
  echo "<hr>";
  echo '<h2>activity#2</h2><br>';
  echo "<ul>
  <li>$arrayColdplay[0]</li>
  <li>$arrayColdplay[1]</li>
  <li>$arrayColdplay[2]</li>
  </ul>";
  echo "<hr>";
  echo '<h2>activity#3</h2><br>';
  $array01 = array('Steph', 'Russel', 'Lebron');
  $array02 = array('Curry', 'Westbrook', 'James');
  $array03 = array('Warriors', 'Thunders', 'Cavaliers');
  $array04 = array('30', '0', '23');
  
  $n = 0;
  echo "Player: $array01[$n] $array02[$n] <br>";
  echo "Team: $array03[$n] <br>";
  echo "Jersey: $array04[$n] <br><br>";
  $n = 1;
  echo "Player: $array01[$n] $array02[$n]<br>";
  echo "Team: $array03[$n] <br>";
  echo "Jersey: $array04[$n] <br><br>";
  $n = 2;
  echo "Player: $array01[$n] $array02[$n]<br>";
  echo "Team: $array03[$n] <br>";
  echo "Jersey: $array04[$n] <br><br>";

  echo "<hr>";
  echo '<h2>activity#4</h2><br>';

  echo "<table>
  <tr>
    <th>Player</th>
    <th>Team</th>
    <th>Jersey</th>
  </tr>";
  $n = 0;
  echo "
  <tr>
    <td>$array01[$n] $array02[$n]</td>
    <td>$array03[$n]</td>
    <td>$array04[$n]</td>
  </tr>";
  $n = 1;
  echo "
  <tr>
    <td>$array01[$n] $array02[$n]</td>
    <td>$array03[$n]</td>
    <td>$array04[$n]</td>
  </tr>";
  $n = 2;
  echo "
  <tr>
    <td>$array01[$n] $array02[$n]</td>
    <td>$array03[$n]</td>
    <td>$array04[$n]</td>
  </tr>
  </table>";
?>



</body>

</html>
<!-- HTML5 Template version 1.5 20171225 ===================-->
<!-- Developer: Michael James Turiano Albatana              -->
<!-- Email: mjtalbatana@gmail.com                           -->
<!-- Github: https://github.com/mjtalbatana                 -->
<!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana      -->
<!-- END OF HTML FILE ======================================-->