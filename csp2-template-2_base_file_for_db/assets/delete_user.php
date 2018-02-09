<?php

$user_id = $_POST['user_id'];

$file = file_get_contents('users.json');
$users = json_decode($file, true);

array_splice($users, $user_id, 1);

$jsonFile = fopen('users.json', 'w');
fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
fclose($jsonFile);

header('location: ../settings.php');