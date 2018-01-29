<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();


  $v_itemname = htmlspecialchars($_POST['item-name']);
  $v_itemprice = htmlspecialchars($_POST['item-price']);
  $v_itemimage = htmlspecialchars($_POST['item-image']);
  $v_itemdesc = htmlspecialchars($_POST['item-desc']);
  $v_itemcat = htmlspecialchars($_POST['item-cat']);

  $readarray = file_get_contents('items.json');
  $decodedarray = json_decode($readarray, true);


  $decodedarray[$_SESSION['getid']-1]['name'] = $v_itemname;
  $decodedarray[$_SESSION['getid']-1]['price'] = $v_itemprice;
  $decodedarray[$_SESSION['getid']-1]['image'] = $v_itemimage;
  $decodedarray[$_SESSION['getid']-1]['description'] = $v_itemdesc;
  $decodedarray[$_SESSION['getid']-1]['category'] = $v_itemcat;


  $encodedarray = json_encode($decodedarray, JSON_PRETTY_PRINT);


  copy('items.json', 'items_back.json');
  $fileopen = fopen('items.json', 'w');
  fwrite($fileopen, $encodedarray);
  fclose($fileopen);

  $_SESSION['snackbar'] = "item update successful";


  header('location: ' . $_SESSION['prevpage'] . '?id=' . $_SESSION['getid']);
?>