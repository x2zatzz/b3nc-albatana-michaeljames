<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
  $_SESSION['webtitle'] = 'Whiskey Web App ';
  ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
  <?php require 'assets/php/navheader.php'?>
  <main>
  <?php require 'assets/php/snackbar.php'?>
  <?php

  $id = $_GET['id'];

  $fileopen = file_get_contents('items.json');
  $decodedarray = json_decode($fileopen, true);

  echo "
  <table>
    <tr>
      <td>Product Name</td>
      <td>";
      echo $decodedarray[$id-1]['name'];
echo "
      </td>
    </tr>
    <tr>
      <td>Image</td>
      <td>
      <img src=\"";
      echo $decodedarray[$id-1]['image'];
echo "
      \">
    </td></tr>
    <tr>
      <td>Price</td>
      <td>";
      echo $decodedarray[$id-1]['price'];
echo "
      </td>
    </tr>
    <tr>
      <td>Description</td>
      <td>";
      echo $decodedarray[$id-1]['description'];
echo "
      </td>
    </tr>
  </table>
  <button onclick=\"window.location.href='catalog.php'\">Back to Catalog Page</button>
  ";
  ?>
  <?php

  // var_dump($_SESSION);
  ?>
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
