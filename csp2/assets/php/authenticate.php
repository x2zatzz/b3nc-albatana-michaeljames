<?php

$users = [
  ['username' => 'admin', 'password' => "!admin"],
  ['username' => 'dummyuser', 'password' => "#dummy"],
  ['username' => 'dummyuser1', 'password' => "#dummy"]
];

$username = $_POST['username'];
$password = $_POST['password'];

foreach($users as $user){

  if($user['username'] == $username && $user['password'] == $password){
    $loginmessage = "login successful";
    $loginflag = true;
    break;
  } elseif($user['username'] == $username && $user['password'] !== $password){
    $loginmessage = "wrong password, please try again";
    $loginflag = false;
    break;
  } else{
    $loginflag = false;
    $loginmessage = "username is not yet registered";
    break;
  }
  // if($user['username'] == $username){
  //   if($user['password'] == $password){
  //     echo "login successful";
  //     // header('location: ../../home.php');
  //   } else{
  //     echo "wrong password, please try again";
  //   }
  //   break;
  // } else{
  //   echo $username . " was not found <br>";
  //   break;
  // }
}

  if($loginflag == true){
    $_SESSION['current_user'] = $username;
    header('location: ../../home.php');
  } else{
    $_SESSION['message'] = $loginmessage;
    header('location: ../../login.php');
  }
  if(isset($_SESSION['current_user']) && $loginflag){
    $_SESSION['message'] = $loginmessage;
  } else{
    $_SESSION['message'] = $loginmessage;
  }

?>