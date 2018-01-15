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
<?php
  // function table($trows, $tcols){
    //   echo "<table><tbody>";

  //   for($trows = 1, $tcols = 1; )
  //   echo "</tbody></table>";
  // }

  function longdate($timestamp){
    return date("l F js Y", $timestamp);
  }

  function fix_name($fname1, $fname2, $lname){

  }
?>
<?php
  fix_name("maikeru", "je-muzu", "arubatana");
?>

<?php
  function areaRectangle($length, $width){
    $area = $length * $width;
    return $area;
  }
?>

<?php
  echo "<h2>Function invocations:</h2>";
  global $length;
  global $width;
  echo "the area of the $length x $width rectangle is:". " " . areaRectangle(5, 3) . '<br>';
?>

<?php
include "assets/php/hello_world.php";
?>

<?php
require "assets/php/require_php.php";
 requiredFunction();
?>


</body>

</html>
<!-- HTML5 Template version 1.5 20171225 ===================-->
<!-- Developer: Michael James Turiano Albatana              -->
<!-- Email: mjtalbatana@gmail.com                           -->
<!-- Github: https://github.com/mjtalbatana                 -->
<!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana      -->
<!-- END OF HTML FILE ======================================-->