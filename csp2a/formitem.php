<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
<?php require 'assets/php/navheader.php'?>
  <main>
    <?php include 'assets/php/snackbar.php' ?>
    <form action="additem.php" method="post" id="signinform">
      <label for="name">Product Name: </label>
      <input type="text" name="name" placeholder="enter the product name" id="name" required="required">
      <label for="price">Price: </label>
      <input type="number" name="price" placeholder="enter the price" required="required">
      <label for="description">Product Description</label>
      <input type="text" name="description" placeholder="enter the product description" required="required">
      <label for="image">Image URL</label>
      <input type="text" name="image" placeholder="enter the image url" required="required">
      <label for="category">Item category</label>
      <select name="category" id="" size="4" required="required">
        <option value="beer" selected>Beer</option>
        <option value="vodka">Vodka</option>
        <option value="whiskey">Whiskey</option>
        <option value="wine">Wine</option>
      </select>
      <input type="submit" value="Add Item">
    </form>
  </main>
  <?php require 'assets/php/footer.php'?>
  <script language="javascript" defer>
  </script>
</body>
</html>
<?php require 'assets/php/signature.php'?>
