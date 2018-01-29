<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
  $_SESSION['webtitle'] = 'Whiskey Web App ';
  $_SESSION['getid'] = $_GET['id'];
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
    <tr>
      <td>Category</td>
      <td>";
      echo $decodedarray[$id-1]['category'];
echo "
      </td>
    </tr>
  </table>
  <button id=\"modalbutton\">Edit Item</button>
  <button onclick=\"window.location.href='catalog.php'\">Back to Catalog Page</button>
  ";
  ?>
  <?php

  ?>
  <div id="modal">
    <div id="modal-content">
      <div class="modal-top"> </div>
      <div class="modal-close">&times;</div>
      <div class="modal-text">
        <?php
        echo "
        <form action=\"itemedit.php\" method=\"post\" id=\"edititemform\">
          <label for=\"item-name\">Product name: </label>
          <input type=\"text\" name=\"item-name\" required>
          <label for=\"item-price\">Product price: </label>
          <input type=\"number\" name=\"item-price\" required>
          <label for=\"item-image\">Image path: </label>
          <input type=\"url\" name=\"item-image\" required>
          <label for=\"item-desc\">Product description: </label>
          <input type=\"text\" name=\"item-desc\" required>
          <label for=\"item-cat\">Product category: </label>
          <select name=\"item-cat\" id=\"\" required>
            <option value=\"beer\">Beer</option>
            <option value=\"whiskey\">Whiskey</option>
            <option value=\"water\">Water</option>
          </select>
          <input type=\"submit\" value=\"update item information\">
        </form>
        <button onclick=\"window.location.href='itemdelete.php'\">Delete item</button>
        "
        ?>
      </div>
    </div>
  </div>
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
