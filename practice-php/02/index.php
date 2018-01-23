<?php
  session_start();
?>
<html>
<head>
<style>
  body{
    display: grid;
    height: 500px;
    grid-template-areas: "snackbar snackbar" "h2 h2" "left right";
    grid-template-rows: 1em 50px 1fr;
    grid-template-columns: 1fr 1fr;
  }
  #snackbar{
    grid-area: snackbar;
  }
  h2{
    grid-area: h2;
  }
  #left{
    grid-area: left;
  }
  #right{
    grid-area: right;
  }
  label,
  input{
    display: block;
  }
</style>
</head>
<body>
<div id="snackbar">
  <?php
    echo $_SESSION['snackbar_msg'];
  ?>
</div>
<h2>Registration Form</h2>
<form action="reg.php" method="post" id="left">
  <label for="name">Name: </label>
  <input type="text" name="name" placeholder="enter your name" value="try">
  <label for="username">Username: </label>
  <input type="text" name="username" placeholder="enter your username" value="try">
  <label for="email">Email: </label>
  <input type="email" name="email" placeholder="enter your email" value="try@try.com">
  <label for="password">Password: </label>
  <input type="password" name="password" placeholder="enter the password" value="1234">
  <input type="submit" value="Register">
</form>
<form action="auth.php" method="post" id="right">
  <label for="username">Username: </label>
  <input type="text" name="username" placeholder="enter your username" value="try">
  <label for="password">Password: </label>
  <input type="password" name="password" placeholder="enter the password" value="1234">
  <input type="submit" value="Login">
</form>
</body>
</html>

