<?php
  session_start();

  $v_username = htmlspecialchars($_POST['username']);
  $v_name = htmlspecialchars($_POST['name']);
  $v_email = htmlspecialchars($_POST['email']);
  $v_password = htmlspecialchars($_POST['password']);

  $filecurrent = file_get_contents('db.json');
  $decodedarray = json_decode($filecurrent, true);

  for($i=1; $i<=count($decodedarray); $i++){
    if($decodedarray[$i-1]['username'] === $v_username){
      $_SESSION['snackbar_msg'] = "\"$v_username\" user is not available for registration";
      $flag_db_match = true;
      break;
    } else{}
  }
  if($flag_db_match == false){
    $arrayupload['username'] = $v_username;
    $arrayupload['name'] = $v_name;
    $arrayupload['email'] = $v_email;
    $arrayupload['password'] = $v_password;
    copy('db.json','db_back.json');
    $decodedarray[count($decodedarray)] = $arrayupload;
    $encodedarray = json_encode($decodedarray, JSON_PRETTY_PRINT);
    $db_file = fopen('db.json', 'w+');
    fwrite($db_file, $encodedarray);
    fclose($db_file);
    $_SESSION['snackbar_msg'] = "Welcome, \"$v_username\". You have completed your registration";
  }
  header('location: index.php');
?>
