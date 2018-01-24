<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_session_init();
?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
<?php require 'assets/php/navheader.php'?>
  <main>
    <?php include 'assets/php/snackbar.php' ?>
    <form action="reg.php" method="post" id="signupform">
      <label for="username">Username: </label>
      <input type="text" name="username" placeholder="enter a registered username" id="username" required="required">
      <label for="password">Password: </label>
      <input type="password" name="password" placeholder="enter your password" id="password" required="required">
      <label for="passwordconfirm">Confirm Password: </label>
      <input type="password" name="passwordconfirm" placeholder="re-enter your password" id="passwordconfirm" required="required">
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="enter your name" id="name" required="required">
      <label for="email">Email: </label>
      <input type="email" name="email" placeholder="enter your email" id="email" required="required">
      <!-- <label for="account-role">user</label>
      <input type="radio" name="account-role" value="user" checked>
      <label for="account-role">admin</label>
      <input type="radio" name="account-role" value="admin"> -->
      <input type="submit" value="Sign Up">
    </form>
    <!-- <?php var_dump($_SESSION)?> -->
  </main>
  <?php require 'assets/php/footer.php'?>
  <script language="javascript">
    $('#username').on('input', function() {
			var usernameText = $(this).val();
			// console.log(usernameText);
    $.post('validation.php',
				{ username: usernameText },
				function(data, status) {
					console.log('Processed: ' + data);
				});
    });

  </script>

  <script src='assets/js/script.js'>
  </script>
</body>
</html>
<?php require 'assets/php/signature.php'?>
