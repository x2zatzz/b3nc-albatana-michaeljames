<?php
$userName = $_POST['username'];
$passWord = $_POST['password'];
echo $userName . ' ' . $passWord . ' ' . $confirmPassword;
$file = file_get_contents('assets/users.json');
$users = json_decode($file, true);
$array_push($users, array("username" => $userName, "password" => $passWord));
var_export($users);
$file = fopen('assets/users.json','w');
fwrite($file, json_encode($users, JSON_PRETTY_PRINT));
fclose($file);
header('location: login.php');
?>