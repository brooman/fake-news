<?php

//Setup
declare(strict_types=1);

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use EasyConnect\EasyConnect;

session_start();

//Check if logged in
if (!$_SESSION['logged_in']) {
    header('location: /admin/login.php');
}

//Get name of logged in user
$database = new EasyConnect();

$query = 'SELECT user.name FROM user WHERE user.id = :user_id';
$params = [
    ':user_id' => $_SESSION['user_id'],
];
$result = $database->getData($query, $params);

$name = $result[0]['name'];

//Load Views

require $_SERVER['DOCUMENT_ROOT'].'/views/header.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/adminpanel.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php';
