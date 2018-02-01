<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
  unset($_SESSION['username']);
  unset($_SESSION['role']);
  unset($_SESSION['cartqty']);
  $_SESSION['snackbar'] = 'you have been manually logged out';
  header('location: index.php');
?>