<?php
  require_once 'assets/php/phpfunctions.php';
  require_once 'addtocart.php';
  fn_pagecheck();
  fn_session_init();
  fn_ttl_cart();

  header("location: catalog.php");

?>