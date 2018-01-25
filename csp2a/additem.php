<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();

  $itemname = htmlspecialchars($_POST['name']);
  $itemprice = htmlspecialchars($_POST['price']);
  $itemdescription = htmlspecialchars($_POST['description']);
  $itemcategory = htmlspecialchars($_POST['category']);
  $itemurl = htmlspecialchars($_POST['image']);

  $fileopen = file_get_contents('items.json');
  $decodedarray = json_decode($fileopen, true);

  $arraylength = count($decodedarray);

  $decodedarray[$arraylength]['name'] = $itemname;
  $decodedarray[$arraylength]['price'] = $itemprice;
  $decodedarray[$arraylength]['description'] = $itemdescription;
  $decodedarray[$arraylength]['category'] = $itemcategory;
  $decodedarray[$arraylength]['image'] = $itemurl;

  $encodedarray = json_encode($decodedarray, JSON_PRETTY_PRINT);

  copy('items.json', 'items_back.json');
  $uploadfile = fopen('items.json', 'w');
  fwrite($uploadfile, $encodedarray);
  fclose($uploadfile);

  $_SESSION['snackbar'] = 'successfull added item';

  header('location: formitem.php');
?>