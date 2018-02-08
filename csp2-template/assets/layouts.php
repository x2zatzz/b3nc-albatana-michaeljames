<?php

function fn_layout_head(){
  $_SESSION['webtitle'] = str_replace('.php','',basename($_SERVER['PHP_SELF']));
  echo "
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>" . $_SESSION['webtitle'] . " | " . $_SESSION['webheader'] . "</title>
    <link rel=\"icon\" href=\"https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"assets/scss/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"../../dev-modules/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../../dev-modules/bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css\">
    <script language=\"javascript\" src=\"../../dev-modules/jquery/jquery-3.2.1/jquery-3.2.1.min.js\"></script>
    <script language=\"javascript\" src=\"../../dev-modules/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>
    <script language=\"javascript\" src=\"assets/js/script.js\" defer></script>";
  }

function fn_layout_nav(){
echo "
  <nav class=\"navbar navbar-default navbar-inverse\" id=\"nav-main\">
    <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Kraff Beeer</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"#\">My Cart</a></li>
          <li><a href=\"#\">About</a></li>
          <li><a href=\"#\">Careers</a></li>
          <li><a href=\"#\">Catalog</a></li>
          <li><a href=\"#\">Sign In</a></li>
          <li><a href=\"#\">Sign Up</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
";
}


function fn_layout_footer(){
  $v_year = date('Y', gettimeofday(true));
  echo "
  <p>Copyright &copy;$v_year by Kraff Beeer & Company, Ltd. Co.</p>
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
