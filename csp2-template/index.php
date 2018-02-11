<?php
  require_once 'assets/php/init.php';
  if(isset($_GET['webtitle'])){$_SESSION['webtitle'] = $_GET['webtitle'];}
  $_SESSION['webheader'] = 'this is a template';
  require_once 'assets/layouts.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php fn_layout_head()?>
  </head>
  <body class="container-fluid" onload="fn_onload()">
    <?php fn_layout_nav()?>
    <?php fn_layout_snackbar()?>
    <main class="container-fluid">
      <?php
        if(isset($_GET['webtitle'])){
          switch ($_GET['webtitle']){
            case 'signup':
              fn_page_signup();
              break;
            default:
              fn_page_index();
              break;
          }
        }
      ?>
    </main>
    <footer class="main-footer container-fluid panel">
      <?php fn_layout_footer()?>
    </footer>
    <?php fn_layout_libraries()?>
  </body>
</html>
<?php fn_layout_signature()?>
