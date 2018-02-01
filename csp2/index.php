<?php
  require_once 'assets/layouts.php';
  require_once 'assets/php/functions.php';
  fn_session_init();
  $_SESSION['webheader'] = '';
  fn_layout_head();
?>
<!DOCTYPE html>
<html lang="en">
<?php  ?>
<body>
<?php fn_layout_top()?>
<?php fn_layout_snackbar()?>
<main>
<div id="ajaxtrial">
  <h2>change this text please</h2>
  <button type="button" onclick="fn_trial()">change content</button>
</div>
<?php
?>
</main>
<?php fn_layout_footer()?>
</body>
</html>
<?php fn_layout_signature()?>
