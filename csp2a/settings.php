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
  <table>
    <thead>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
      <th>Role</th>
    </thead>
    <tbody>
      <?php

      $fileopen = file_get_contents('db.json');
      $decodedarray = json_decode($fileopen, true);

      for($i=1; $i<=count($decodedarray); $i++){
        echo "<tr><td class=\"userlink\" onclick=\"window.location.href='users.php?id=$i'" . "\">" . $decodedarray[$i-1]['username'] . "</td>";
        echo "<td>" . $decodedarray[$i-1]['password'] . "</td>";
        echo "<td>" . $decodedarray[$i-1]['email'] . "</td>";
        echo "<td>" . $decodedarray[$i-1]['account-role'] . "</td></tr>";
      }

      // foreach($decodedarray as $field => $value){
      //   echo "<tr><td> $value </td>";
      // }

      ?>
    </tbody>
  </table>
  <button onclick="window.location.href='signup.php'">Add user</button>
  </main>
  <?php require 'assets/php/footer.php'?>
</body>
</html>
<?php require 'assets/php/signature.php'?>
