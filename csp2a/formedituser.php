<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_admin_validation();
  fn_session_init();

$_SESSION['arraykey'] = $_GET['id'];

  $openarray = file_get_contents('db.json');
  $decodedarray = json_decode($openarray, true);

echo "
<form method=\"post\" action=\"editaccountform.php\" id=\"editaccountform\">
  <label for=\"editusername\">Edit username</label>
  <input type=\"text\" name=\"editusername\" id=\"editusername\" required=\"required\" value=\"";
  echo $decodedarray[$_SESSION['arraykey']-1]['username'];

echo "
\">
<label for=\"editpassword\">Change password</label>
<input type=\"password\" name=\"editpassword\" id=\"editpassword\" required=\"required\" value=\"";
echo $decodedarray[$_SESSION['arraykey']-1]['password'];

echo "
\">
<label for=\"editconfirmpassword\">Confirm password</label>
<input type=\"password\" name=\"editconfirmpassword\" id=\"editconfirmpassword\" required=\"required\" value=\"";
echo $decodedarray[$_SESSION['arraykey']-1]['password'];

echo "
\">
<label for=\"editname\">Edit name</label>
<input type=\"text\" name=\"editname\" id=\"editname\" required=\"required\" value=\"";
echo $decodedarray[$_SESSION['arraykey']-1]['name'];

echo "
\">
<label for=\"editemail\">Change email</label>
<input type=\"email\" name=\"editemail\" id=\"editemail\" required=\"required\" value=\"";
echo $decodedarray[$_SESSION['arraykey']-1]['email'];

echo "
  \">
  <label for=\"editrole\">Change role</label>
  <select name=\"editrole\" id=\"\" required=\"required\">";

if($decodedarray[$_SESSION['arraykey']-1]['account-role'] == "admin"){
  echo "
  <option value=\"user\">user</option>
  <option value=\"admin\" selected>admin</option>
  ";
} elseif($decodedarray[$_SESSION['arraykey']-1]['account-role'] == "user"){
  echo "
  <option value=\"user\" selected>user</option>
  <option value=\"admin\">admin</option>
  ";
}

echo "
  </select>
  <input type=\"submit\" value=\"Submit\">
  <input type=\"button\" value=\"Delete user\" onclick=\"window.location.href='deleteuser.php'\">

</form>
";

?>
