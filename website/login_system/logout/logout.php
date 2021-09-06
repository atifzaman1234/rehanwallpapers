<?php

require_once '../../connect-to-database.php';

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/website/login_system/login/login.html.php");

?>