<?php
require_once 'assets/php/functions.php';
  fn_session_init();

function fn_layout_head(){
  $_SESSION['webtitle'] = str_replace('.php','',basename($_SERVER['PHP_SELF']));
  echo "
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>" . $_SESSION['webtitle'] . " | " . $_SESSION['webheader'] . "</title>
    <link rel=\"icon\" href=\"https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"assets/scss/style.css\" type=\"text/css\">
    <script language=\"javascript\" src=\"assets/js/script.js\" defer></script>
    <script language=\"javascript\" src=\"assets/js/interactive.js\" defer></script>
    <script language=\"javascript\" src=\"assets/js/animation.js\" defer></script>
    </head>";
  }
  
function fn_layout_top(){
  echo "
  <div class=\"interactive\" id=\"logo\">
  </div>
  <h1 class=\"interactive\" id=\"title\">
  </h1>
  <nav>
  <ul>
  <li class=\"interactive\" id=\"home\">home</li>
  <li class=\"interactive\" id=\"signin\">sign in</li>
  <li class=\"interactive\" id=\"signup\">sign up</li>
  </ul>
  </nav>
  <div class=\"interactive\" id=\"avatar\">
  </div>";
}

function fn_layout_menumain(){
  echo "
  <menu>
  </menu>";
}

function fn_layout_menuacct(){
  echo "
  <div id=\"menuacct\">
  <ul>
  <li class=\"interactive\" id=\"profile\">profile</li>
  <li class=\"interactive\" id=\"logout\">log out</li>
  <li class=\"interactive\" id=\"settings\">settings</li>
  </ul>
  </div>
  ";
}

function fn_layout_snackbar(){
  echo "
  <div id=\"snackbar\">snackbar
  </div>";
}

function fn_layout_footer(){
  $v_year = date('Y', gettimeofday(true));
  echo "
  <footer>
  <small>&copy;$v_year Michael James Turiano Albatana</small>
  </footer>
  ";
}

function fn_layout_libraries(){
  echo "<script language=\"javascript\" src=\"../../dev-modules/greensock-js/greensock-js-1.20.3/src/minified/TweenMax.min.js\"></script>";
}

function fn_layout_signature(){
  echo "
  <!-- Web Template (integrated) version 1.8 20180202 =================+-->
  <!-- Developer: Michael James Turiano Albatana                       |-->
  <!-- Language: HTML, CSS, SASS/SCSS, JS, PHP                         |-->
  <!-- Libraries/API: GSAP.js                                          |-->
  <!-- IDE/Editor/Debugger: VSCode+Extension+Debugger, Chrome DevTools |-->
  <!-- Repositories/Hosts: Git, GitHub, GitLab, Heroku                 |-->
  <!-- Coding Analytics: Codealike, WakaTime                           |-->
  <!-- Email: mjtalbatana@gmail.com                                    |-->
  <!-- Github: https://github.com/mjtalbatana                          |-->
  <!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana               |-->
  <!-- END OF SIGNATURE ===============================================+-->
  ";
}
?>
