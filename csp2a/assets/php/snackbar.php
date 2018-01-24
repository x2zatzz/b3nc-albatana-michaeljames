<?php
require_once 'assets/php/phpfunctions.php';
fn_session_init();
echo
"
<div id=\"snackbar\"><small id=\"snackbarsmall\">
";
echo $_SESSION['snackbar'];
echo
"
</small></div>
";
?>