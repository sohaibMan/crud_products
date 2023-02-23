<?php

// cookie
session_unset();
session_destroy();
header("Location:/www/login.php");
