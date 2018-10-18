<?php

declare(strict_types=1);

session_start();

//Check login
if (isset($_POST['username'])) {
    require $_SERVER['DOCUMENT_ROOT'].'/database/dbConnect.php';
    $database = new dbConnect();

    //Get password from DB
    $query = 'SELECT user.id, user.password FROM user WHERE username = :username';
    $params = [
        ':username' => $_POST['username'],
    ];
    $return = $database->getData($query, $params);

    if (password_verify($_POST['password'], $return[0]['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $return[0]['id'];
        header('location: /admin/panel.php');
    }
}

//View

require $_SERVER['DOCUMENT_ROOT'].'/views/header.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/components/loginform.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php';
