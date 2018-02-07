<?php
  require_once 'assets/layouts.php';
  $_SESSION['webheader'] = 'this is a template';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php fn_layout_head()?>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">

        </div>
      </div>
    </nav>
    <main class="container">
        This is just a template
    </main>
    <footer>
      <?php fn_layout_footer()?>
    </footer>
    <?php fn_layout_libraries()?>
  </body>
</html>
<?php fn_layout_signature()?>
