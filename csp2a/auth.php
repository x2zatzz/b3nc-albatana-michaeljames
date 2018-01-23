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
      if($decodedarray[$i-1]['account-role'] == 'admin'){
        $_SESSION['role'] = 'admin';
        $_SESSION['snackbar'] = 'login successful, logged as admin';
      } else{
        $_SESSION['role'] = 'user';
        $_SESSION['snackbar'] = 'login successful';
      }
      $_SESSION['username'] = $v_username;
      break;
    } elseif($v_username_base === $v_username && $v_password_base !== $v_password){
      if($_SESSION['password_wrong'] >= 3){
        $_SESSION['snackbar'] = 'your account is temporarily locked because of multiple invalid attempts';
      } else{
        unset($_SESSION['username']);
        $_SESSION['snackbar'] = 'wrong password, please try again';
      }
      unset($_SESSION['username']);
      $_SESSION['password_wrong']++;
      break;
    } else{
      unset($_SESSION['username']);
      $_SESSION['snackbar'] = "$v_username not yet registered";
    }
  }

  header('location: home.php');
?>