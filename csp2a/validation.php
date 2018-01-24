<?php

$username = $_POST['username'];
$fileopen = file_get_contents('db.json');
$decodedarray = json_decode($fileopen, true);
$usernames = [];
foreach($decodedarray as $user){
  array_push($usernames, $user['username']);
}

$username_entry = $_POST['username'];
if(in_array($username_entry, $usernames)){
  echo 'invalid username';
} else{
  echo 'valid username';
}
?>