<?php
$path = basename($_SERVER['PHP_SELF']);
switch($path){
  case 'index.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";
    echo "
      <div id=\"ajaxtrial\">
        <h2>change this text please</h2>
        <button type=\"button\" onclick=\"fn_trial()\">change content</button>
      </div>";
    break;
//--------------------------------------------------------------------------------------
  case 'home.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";
    break;
//--------------------------------------------------------------------------------------
  case 'catalog.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";

    break;
//--------------------------------------------------------------------------------------
  case 'cartwishlist.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";

    break;
//--------------------------------------------------------------------------------------
  case 'checkout.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";

    break;
//--------------------------------------------------------------------------------------
  case 'manager.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";

    break;
//--------------------------------------------------------------------------------------
  case 'admin.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";

    break;
//--------------------------------------------------------------------------------------
  case 'stats.php':
    echo "this is a " . basename($_SERVER['PHP_SELF']) . " webpage";

    break;
//--------------------------------------------------------------------------------------
  default:
    echo "please contact administrator";
//--------------------------------------------------------------------------------------
}

?>