<?php


session_start();

!isset($_SESSION['user_id']) ? header(('Location:/login.php')) : header(('Location:/products.php'));
