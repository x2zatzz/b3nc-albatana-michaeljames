<?php

// $username = $_POST['username'];

// processing
$file = file_get_contents('users.json');
$users = json_decode($file, true);
$usernames = [];
foreach ($users as $user) {
	array_push($usernames, $user['username']);
}

if (isset($_POST['username'])) {
	$username_entered = $_POST['username'];

	 if (!empty($username_entered)) {
		if (in_array($username_entered, $usernames)) {
			echo 'Username <span class="red-message">not valid</span>';
		} else {
			echo 'Username <span class="green-message">valid</span>';
		}
	 } else {
	 	echo 'Username';
	 }

}

// echo $username;
// var_dump($usernames);