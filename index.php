<?php


session_start();

!isset($_SESSION['user_id']) ? header(('Location: /www/login.php')) : header(('Location: /www/products.php'));
