<?php
require_once 'assets/php/init.php';
function fn_layout_head(){
  // $_SESSION['webtitle'] = str_replace('.php','',basename($_SERVER['PHP_SELF']));

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
  <nav class=\"navbar navbar-default navbar-inverse\" id=\"nav\">
    <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" onclick=\"window.location.href='index.php'\">Kraff Beeer</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a class=\"navlink\">My Cart</a></li>
          <li><a class=\"navlink\">About</a></li>
          <li><a class=\"navlink\">Careers</a></li>
          <li><a class=\"navlink\">Catalog</a></li>
          <li><a class=\"navlink\">Sign In</a></li>
          <li><a class=\"navlink\">Sign Up</a></li>g
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
";
}

function fn_layout_snackbar(){
  $var = 'snackbar';
  if(isset($_SESSION['snackbar'])){
    $var = $_SESSION['snackbar'];
  }
  echo "
    <div id=\"snackbar\" hidden>" . $var . "</div>";
}


function fn_layout_footer(){
  $v_year = date('Y', gettimeofday(true));
  echo "
  <p>Copyright &copy;$v_year by Kraff Beeer & Company, Ltd. Co.</p>
  ";
}

function fn_layout_libraries(){
  // echo "<script language=\"javascript\" src=\"../../dev-modules/greensock-js/greensock-js-1.20.3/src/minified/TweenMax.min.js\"></script>";
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

//====================================================================
function fn_page_index(){
  $_SESSION['webtitle'] = 'Index';
  echo "
    <h1>Welcome Guest!</h1>
  ";
}


function fn_page_signup(){
  $_SESSION['webtitle'] = 'Register';
  echo "
  <h2>User Registration</h2>
  <form action=\"assets/register.php\" method=\"POST\">
    <fieldset name=\"username\">
      <label for=\"username\">Username: </label>
      <input id=\"username\" class=\"validate\" type=\"text\" name=\"username\"
        value=\"value\" placeholder=\"enter a unique username\"
        required autofocus autocomplete>
    </fieldset>
    <fieldset>
      <label for=\"password\">Password: </label>
      <input id=\"password\" type=\"password\" name=\"password\"
        value=\"\" placeholder=\"enter your password\"
        required autocomplete>
    </fieldset>
    <fieldset>
      <label for=\"confirmpassword\">Confirm Password: </label>
      <input id=\"confirmpassword\" class=\"validate\" type=\"password\" name=\"confirmpassword\"
        value=\"\" placeholder=\"re-type your password\"
        required autocomplete>
    </fieldset>
    <fieldset>
      <label for=\"email\">Email Address: </label>
      <input id=\"email\" class=\"validate\" type=\"email\" name=\"email\"
        value=\"value@value.value\" placeholder=\"enter a valid email@domain\"
        required autocomplete>
    </fieldset>
    <fieldset>
      <label for=\"firstname\">First Name: </label>
      <input id=\"firstname\" class=\"validate\" type=\"text\" name=\"firstname\"
        value=\"value\" placeholder=\"enter your first name\"
        required autocomplete>
    </fieldset>
    <fieldset>
      <label for=\"lastname\">Last Name: </label>
      <input id=\"lastname\" class=\"validate\" type=\"text\" name=\"lastname\"
        value=\"value\" placeholder=\"enter your last name\"
        required autocomplete>
    </fieldset>
    <fieldset>
      <button id=\"submitbutton\" type=\"submit\">Register</button>
    </fieldset>
  </form>
  ";
}

?>
