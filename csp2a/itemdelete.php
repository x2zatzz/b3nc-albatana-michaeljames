<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();

  $readarray = file_get_contents('items.json');
  $decodedarray = json_decode($readarray, true);

  unset($decodedarray[$_SESSION['getid']-1]);

  $encodedarray = json_encode($decodedarray, JSON_PRETTY_PRINT);

  copy('items.json', 'items_back.json');
  $fileopen = fopen('items.json', 'w');
  fwrite($fileopen, $encodedarray);
  fclose($fileopen);

  $_SESSION['snackbar'] = "product successfully deleted from catalog";
  header("location: catalog.php");
  ?>