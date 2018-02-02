<?php
  require_once 'assets/layouts.php';
  require_once 'assets/php/functions.php';
  fn_session_init();
  $_SESSION['webheader'] = '';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php fn_layout_head()?>
  </head>
  <body>
    <?php fn_layout_top()?>
    <?php fn_layout_snackbar()?>
    <main>>
      <?php require_once 'assets/webcontents.php'?>
    </main>
    <footer>
      <?php fn_layout_footer()?>
    </footer>
    <?php fn_layout_libraries()?>
  </body>
</html>
<?php fn_layout_signature()?>
