<?php

session_unset($_SESSION['current_user']);
session_unset($_SESSION['message']);
session_destroy();

?>