<?php

// cookie
session_start();
session_unset();
session_destroy();
setcookie("PHPSESSID", null);
// print($_SESSION["user-id"]);
header("Location:/login.php");
