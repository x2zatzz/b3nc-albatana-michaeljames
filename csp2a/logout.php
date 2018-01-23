<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  header('location: ' . $_SESSION['prevpage']);
?>