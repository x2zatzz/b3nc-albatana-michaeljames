<?php

session_start();

$userName = $_POST['username'];
$passWord = $_POST['password'];

// echo $userName . ' ' . $passWord;

$file = file_get_contents('users.json');
$users = json_decode($file, true);

// var_dump($users);

$isLogInSuccessful = false;

foreach ($users as $user) {
    // echo $user['username'] . ' ' . $user['password'];

    if ($userName == $user['username'] && $passWord == $user['password']) {
        // echo 'Login was successful.';
        $isLogInSuccessful = true;
        $_SESSION['current_user'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        break;
    }
}

if ($isLogInSuccessful) {
    // if successful login
    header('location: ../home.php');
} else {
    // if failed login
    header('location: ../login.php');
}