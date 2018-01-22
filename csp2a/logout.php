<?php
  require 'assets/php/phpfunctions.php';
  print_r($_SESSION['prevpage']);
  print_r($_SESSION['currentpage']);

  fn_pagecheck();
  var_dump($_SESSION);
  // header('location: ' . $_SESSION['prevpage']);
?>