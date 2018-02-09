<?php

$id = $_GET['id'];

// successful processing

$file = file_get_contents('users.json');
$users = json_decode($file, true);

echo '
<div class="form-group">
	<label>Username</label>
	<input name="username" class="form-control" type="text" value="'.$users[$id]['username'].'">

	<labe>Password</label>
	<input name="password" class="form-control" type="password" value="'.$users[$id]['password'].'">

	<labe>Confirm Password</label>
	<input name="confirm_password" class="form-control" type="password">

	<label>Email Address</label>
	<input name="email" class="form-control" type="email" value="'.$users[$id]['email'].'">
';

	$roles = ['admin', 'user'];
	echo '
	<label>Role</label>
	<select class="form-control" name="user_role">';
		foreach ($roles as $role) {
			if ($users[$id]['role'] === $role)
				echo '<option selected>'.$role.'</option>';
			else
				echo '<option>'.$role.'</option>';
		}
	echo'
	</select>
</div>';