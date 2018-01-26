<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_admin_validation();
  fn_session_init();

  $v_getkey = $_SESSION['arraykey']-1;

  $openarray = file_get_contents('db.json');
  $decodedarray = json_decode($openarray, true);

  $v_username = htmlspecialchars($_POST['editusername']);
  $v_name = htmlspecialchars($_POST['editname']);
  $v_password = htmlspecialchars($_POST['editpassword']);
  $v_email = htmlspecialchars($_POST['editemail']);
  $v_role = htmlspecialchars($_POST['editrole']);

  $editedarray = array('username' => $v_username, 'name' => $v_name, 'email' => $v_email, 'password' => $v_password, 'account-role' => $v_role);

  $decodedarray[$v_getkey] = $editedarray;

  $encodedarray = json_encode($decodedarray, JSON_PRETTY_PRINT);


  copy("db.json", "db_back.json");
  $fileopen = fopen("db.json", "w");
  fwrite($fileopen, $encodedarray);
  fclose($fileopen);
  header('location: settings.php');

?>