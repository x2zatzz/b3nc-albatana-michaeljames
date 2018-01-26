<?php
  require_once 'assets/php/phpfunctions.php';
  fn_pagecheck();
  fn_admin_validation();
  fn_session_init();
  $_SESSION['webtitle'] = 'Whiskey Web App ';
  ?>
<!DOCTYPE html>
<html lang="en">
<?php require 'assets/php/head.php'?>
<body>
  <?php require 'assets/php/navheader.php'?>
  <main>
  <?php require 'assets/php/snackbar.php'?>
  <?php

  $id = $_GET['id'];

  $fileopen = file_get_contents('db.json');
  $decodedarray = json_decode($fileopen, true);

  echo "
    <table>
      <tr>
        <td>Username</td>
        <td>";
        echo $decodedarray[$id-1]['username'];
  echo "
        </td>
      </tr>
      <tr>
        <td>Name</td>
        <td>";
        echo $decodedarray[$id-1]['name'];
  echo "
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>";
        echo $decodedarray[$id-1]['password'];
  echo "
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>";
        echo $decodedarray[$id-1]['email'];
  echo "
        </td>
      </tr>
      <tr>
        <td>Role</td>
        <td>";
        echo $decodedarray[$id-1]['account-role'];
  echo "
        </td>
      </tr>
    </table>
    <button onclick=\"window.location.href='settings.php'\">Back to User list</button>
    ";
    ?>
  <?php

// var_dump($_SESSION);
?>
  <button id="modalbutton">Edit</button>
  <div id="modal">
    <div id="modal-content">
      <div class="modal-top"></div>
      <div class="modal-close">&times;</div>
      <div class="modal-text"><?php require "formedituser.php"?></div>
    </div>
  </div>
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
