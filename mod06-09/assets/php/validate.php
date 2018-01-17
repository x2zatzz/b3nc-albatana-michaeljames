<?php

$username_v = htmlspecialchars($_POST['username']);
$password_v = htmlspecialchars($_POST['password']);
$firstname_v = htmlspecialchars($_POST['firstname']);

echo "
  <h4>username: $username_v</h4>
  <h4>password: $password_v</h4>
  <h4>こんにちわ！ $firstname_v</h4>
"

?>