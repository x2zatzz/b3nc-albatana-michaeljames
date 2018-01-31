<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
  $n = $_SESSION['cart'][$_GET['id']]['qty'];

  $_SESSION['cart'][$_GET['id']] = ['qty' => $n+1];


  var_dump($_SESSION['cart']);
  $_SESSION['snackbar'] = "item added to cart, total items: ";

  // header("location: catalog.php");
?>