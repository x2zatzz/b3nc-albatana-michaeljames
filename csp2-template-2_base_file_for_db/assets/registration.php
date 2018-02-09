<?php

require('my/dbconnect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$image = "http://picsum.photos/100/100/?image=278";
$first_name = 'maikerujeimuzu';
$last_name = 'arubatana';
$address = 'Tokyo, Japan';
$contact = '777777';
$role_id = '2';

$sql =
"INSERT INTO users
(email, image, username, password, first_name, last_name, address, contact, role_id)
VALUES
('$email','$image','$username ','$password ','$first_name ','$last_name',' $address','$contact','$role_id');";

echo $sql;

$result = mysqli_query($conn, $sql);

echo mysqli_error($conn);

mysqli_close($conn);


// echo $userName . ' ' . $passWord . ' ' . $email;

// $file = file_get_contents('users.json');
// $users = json_decode($file, true);

// $newUser = array(
// 	'username' => $userName,
// 	'password' => $passWord,
// 	'email' => $email,
// 	'role' => 'user'
// );

// array_push($users, $newUser);

// $jsonFile = fopen('users.json', 'w');
// fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
// fclose($jsonFile);

// header('location: ../login.php');