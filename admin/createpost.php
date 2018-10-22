<?php

declare(strict_types=1);

session_start();

if (!$_SESSION['logged_in']) {
    header('location: /admin/login.php');
}

print_r($_POST);