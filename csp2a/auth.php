<?php
  session_start();
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
      $_SESSION['snackbar'] = 'wrong password, please try again';
      break;
    } else{
      $_SESSION['snackbar'] = "$v_username not yet registered";
    }
  }

  // print_r($_SESSION['snackbar']);
  header('location: signin.php');
?>