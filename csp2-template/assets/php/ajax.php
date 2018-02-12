<?php
  require_once '../../assets/php/init.php';
  require_once '../../assets/php/scripts-acct.php';
  $username = $_GET['username'];
  $_SESSION['username'] = $username;
  $type = $_GET['type'];
  if($type == 'json'){
    $_SESSION['webtitle'] = 'signin';
  }
  // header('location: ../../index.php?webtitle=signin');
?>