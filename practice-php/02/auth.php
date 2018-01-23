<?php
  session_start();
  $v_username = $_POST['username'];
  $v_password = $_POST['password'];

  $currentfile = file_get_contents('db.json');
  $decodedfile = json_decode($currentfile, true);
  for($i=1; $i<=count($decodedfile);$i++){
    $v2_username = $decodedfile[$i-1]['username'];
    $v2_password = $decodedfile[$i-1]['password'];
    if($v_username === $v2_username && $v_password === $v2_password){
      $_SESSION['username'] = $v2_username;
      $_SESSION['snackbar_msg'] = "login successful, welcome " . $_SESSION['username'];
      break;
    } elseif($v_username === $v2_username && $v_password !== $v2_password){
      $_SESSION['snackbar_msg'] = 'wrong password, please try again';
      break;
    } elseif($i===count($decodedfile)){
      $_SESSION['snackbar_msg'] = 'username not yet registered';
    }
    else{
    }
  }
  header('location: index.php');

?>
