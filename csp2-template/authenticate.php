<?php

session_start();

$file = file_get_contents('assets/users.json');
$users = file_get_contents($file, 'true');

$isLoginSuccessful = false;  // monitor login status

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);
foreach ($users as $user) {
	if ($user['username'] == $userName && $user['password'] == $passWord) {
		$isLoginSuccessful = true;
		break;
	}
}
if ($isLoginSuccessful) {
	$_SESSION['current_user'] = $userName;
	header('location: home.php');
}
else {
	header('location: login.php');
}
if (isset($_SESSION['current_user']) && $isLoginSuccessful)
	$_SESSION['message'] = 'Login was successful.';

?>