<?php

declare(strict_types=1);

session_start();

//Check login
if (isset($_POST['username'])) {
    require __DIR__.'/database/dbConnect.php';
    $database = new dbConnect();

    //Get password from DB
    $query = 'SELECT user.password FROM user WHERE username = :username';
    $params = [
        ':username' => $_POST['username'],
    ];
    $database->getData();

    if (password_verify($_POST['password'], $password)) {
        $_SESSION['loggedIn'] = true;
    }
}

//View
require __DIR__.'/views/header.php';

require __DIR__.'/views/components/loginform.php';

require __DIR__.'/views/footer.php';
