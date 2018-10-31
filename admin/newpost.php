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

//Check for $_POST data and insert into database
if (isset($_POST['post_content'])) {
    $database = new EasyConnect();

    $query = 'INSERT INTO posts (user_id, title, content, creationdate) VALUES (:user, :title, :content, :creationdate)';
    $params = [
        ':user' => $_SESSION['user_id'],
        ':title' => strip_tags($_POST['post_title']),
        ':content' => strip_tags($_POST['post_content']),
        ':creationdate' => time(),
    ];

    $database->setData($query, $params);
    $alert = [
        'type' => 'success',
        'header' => 'Success!',
        'message' => 'Your post has been uploaded.',
    ];
}

//Load Views

require $_SERVER['DOCUMENT_ROOT'].'/views/header.php';

if (isset($alert)) {
    require $_SERVER['DOCUMENT_ROOT'].'/views/components/alert.php';
}

require $_SERVER['DOCUMENT_ROOT'].'/views/newpost.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php';
