<?php
$v_htmltitle = str_replace('.php','',basename($_SERVER['PHP_SELF']));
echo
"
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title> $v_htmltitle | $v_htmlsubtitle </title>
  <link rel=\"icon\" href=\"https://raw.githubusercontent.com/mjtalbatana/profile-logo/master/mjta-v01.ico\" type=\"image/x-icon\">
  <link rel=\"stylesheet\" href=\"assets/scss/style.css\" type=\"text/css\">
  <script language=\"javascript\" src=\"assets/js/script.js\" defer></script>
</head>
"
?>