<?php
require_once 'assets/php/functions.php';
  fn_session_init();

function fn_layout_head(){
  $_SESSION['webtitle'] = str_replace('.php','',basename($_SERVER['PHP_SELF']));
  echo "
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>" . $_SESSION['webtitle'] . " | " . $_SESSION['webheader'] . "</title>
    <link rel=\"icon\" href=\"https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"assets/scss/style.css\" type=\"text/css\">
    <script language=\"javascript\" src=\"assets/js/script.js\" defer></script>
  </head>";
}

function fn_layout_top(){
  echo "
  <div class=\"interactive\"id=\"logo\">
  </div>
  <div class=\"interactive\" id=\"title\">" .
  $_SESSION['webtitle'] .
  "</div>
  <nav>
    <ul>
      <li class=\"interactive\" id=\"home\">home</li>
      <li class=\"interactive\" id=\"catalog\">catalog</li>
      <li class=\"interactive\" id=\"sign-in\">sign-in</li>
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
      <li>profile & config</li>
      <li>log out</li>
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
  echo
  "
  <footer>
  <small>&copy;$v_year Michael James Turiano Albatana</small>
  </footer>
";
}

function fn_layout_signature(){
  echo "
  <!-- Web Template version 1.7 20180117 ==============================+-->
  <!-- Developer: Michael James Turiano Albatana                       |-->
  <!-- Developed using: HTML5, CSS3, SASS3/SCSS, JS, PHP7              |-->
  <!-- IDE/Editor/Debugger: VSCode+Extension+Debugger, Chrome DevTools |-->
  <!-- Repositories/Hosts: Git, GitHub, GitLab, Heroku                 |-->
  <!-- Developer Analytics: Codealike, WakaTime                        |-->
  <!-- Email: mjtalbatana@gmail.com                                    |-->
  <!-- Github: https://github.com/mjtalbatana                          |-->
  <!-- LinkedIn: https://www.linkedin.com/in/mjtalbatana               |-->
  <!-- END OF SIGNATURE ===============================================+-->
  ";
}
?>