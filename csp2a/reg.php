<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
  $v_username = htmlspecialchars($_POST['username']);
  $v_password = htmlspecialchars($_POST['password']);
  $v_name = htmlspecialchars($_POST['name']);
  $v_email = htmlspecialchars($_POST['email']);
  $uploadarray = array('username' => $v_username, 'name' => $v_name, 'email' => $v_email, 'password' => $v_password, 'account-role' => 'user');

  if($_POST['username'] == "" || $_POST['password'] == "" || $_POST['name'] == "" || $_POST['email'] == ""){
    $_SESSION['snackbar'] = "please complete the form to proceed";
    header('location: signup.php');

  } else{

  }


  $currentfile = file_get_contents('db.json');
  $decodedarray = json_decode($currentfile, true);

  $flag_arraymatch = 0;
  $array_length = count($decodedarray);

  for($i=1; $i<=$array_length; $i++){
    if($decodedarray[$i-1]['username'] == $v_username){
      $flag_arraymatch = 1;
      break;
    } else{
      $flag_arraymatch = 0;
    }
  }

  switch ($flag_arraymatch){
    case 1:
     $_SESSION['snackbar'] = "$v_username is not available.";
      break;
    case 0:
      foreach($uploadarray as $field => $value){
        $decodedarray[$array_length][$field] = $value;
      }
    $encodedarray = json_encode($decodedarray, JSON_PRETTY_PRINT);

    copy('db.json', 'db_back.json');
    $fileopen = fopen('db.json', 'w');
    fwrite($fileopen, $encodedarray);
    fclose($fileopen);
    $_SESSION['snackbar'] = 'database update successful';
    break;
  }
  header('location: ' . $_SESSION['prevpage']);
  ?>