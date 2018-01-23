<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
  $v_username = htmlspecialchars($_POST['username']);
  $v_password = htmlspecialchars($_POST['password']);
  $v_name = htmlspecialchars($_POST['name']);
  $v_email = htmlspecialchars($_POST['email']);
  $uploadarray = array('username' => $v_username, 'name' => $v_name, 'email' => $v_email, 'password' => $v_password);

  $currentfile = file_get_contents('db.json');
  $decodedarray = json_decode($currentfile, true);
  $encodedarray = array();

  $flag_arraymatch = '';
  $array_length = count($decodedarray);
  foreach($decodedarray as $field => $value){
    if($v_username == $value){
      $flag_arraymatch = true;
      break;
    } else{
      $flag_arraymatch = false;
    }
  }

  switch ($flag_arraymatch){
    case true:
      $_SESSION['snackbar'] = "$v_username is not available.";
      break;
    case false:
      fn_arrayencode();
      // fn_arrayupload();
      $_SESSION['snackbar'] = 'database update successful';
      // header('location: ' . $_SESSION['prevpage']);
      break;
  }

  function fn_arrayencode(){
    foreach($uploadarray as $field => $value){
      $decodedarray[$array_length][$field] = $value;
    }
    $encodedarray = json_encode($decodedarray, JSON_PRETTY_PRINT);
  }

  function fn_arrayupload(){
    copy('db.json', 'db_back.json');
    $fileopen = fopen('db.json', 'w');
    fwrite($fileopen, $encodedarray);
    fclose($fileopen);
  }
  var_dump($decodedarray);
  echo '<br>';
  var_dump($uploadarray);
  echo '<br>';
  var_dump($encodedarray);
  echo '<br>';
  ?>