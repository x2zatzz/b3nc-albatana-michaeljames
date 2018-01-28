<?php

$username = $_POST['username'];
$password = $_POST['password'];
// $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);

echo $username . ' ' . $password . ' ' . $passwordConfirm;

// require 'assets/php/users.php';
// array_push($users,[])

$file = file_get_contents('assets/json/users.json');
$users = json_decode($file, true);

var_export($users)


?>