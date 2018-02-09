<?php
  require_once 'assets/layouts.php';
  $_SESSION['webheader'] = 'this is a template';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php fn_layout_head()?>
  </head>
  <body id="body">
    <?php fn_layout_nav()?>
    <main>
      <h1>Index Page</h1>
      <?php require_once('assets/php/dbconnect.php')?>
    </main>
    <footer class="panel panel-footer main-footer fixed-bottom">
      <?php fn_layout_footer()?>
    </footer>
    <?php fn_layout_libraries()?>
  </body>
</html>
<?php fn_layout_signature()?>
