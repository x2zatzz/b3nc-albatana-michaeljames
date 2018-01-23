<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
  $v_username = htmlspecialchars($_POST['username']);
  $v_password = htmlspecialchars($_POST['password']);

  $currentfile = file_get_contents('db.json');
  $decodedarray = json_decode($currentfile, true);

  for($i=1; $i <= count($decodedarray); $i++){
    $v_username_base = $decodedarray[$i-1]['username'];
    $v_password_base = $decodedarray[$i-1]['password'];
    if($v_username_base === $v_username && $v_password_base === $v_password){
      $_SESSION['snackbar'] = 'login successful';
      break;
    } elseif($v_username_base === $v_username && $v_password_base !== $v_password){
      if($_SESSION['password_wrong'] >= 3){
        $_SESSION['snackbar'] = 'your account is temporarily locked because of multiple invalid attempts';
      } else{
        $_SESSION['snackbar'] = 'wrong password, please try again';
      }
      $_SESSION['password_wrong']++;
      break;
    } else{
      $_SESSION['snackbar'] = "$v_username not yet registered";
    }
  }

  header('location: ' . $_SESSION['prevpage']);
?>