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

$result = mysqli_query($conn, $sql);


// if($result = mysqli_query($conn, "SELECT * FROM users")){
// 	printf("Select returned %d rows.\n", mysqli_num_rows($result));
// 	mysqli_free_result($result);
// }

// var_dump(mysqli_fetch_assoc($result));

while($user = mysqli_fetch_assoc($result)){
	extract($user);

	echo '
	<tr>
		<td><a href="user.php?id='.$id.'">'.$username.'</a></td>
		<td>'.$password.'</td>
		<td>'.$email.'</td>
		<td>'.$role_id.'</td>
	</tr>
	';
}



?>
