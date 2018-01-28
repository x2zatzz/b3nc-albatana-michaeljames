<?php
echo
"
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <link rel=\"icon\" href=\"https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" href=\"assets/scss/style.css\" type=\"text/css\">
";

function retrieveTitle(){
  echo basename($_SERVER['PHP_SELF']);
};
?>