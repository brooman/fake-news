<?php

declare(strict_types=1);

session_start();

//Check login
if (isset($_POST['username'])) {
    require __DIR__.'/database/dbConnect.php';
    $database = new dbConnect();

    //Get password from DB
    $query = 'INSERT INTO user (id, name, username, password) VALUES (NULL, :name, :username, :password)';
    $params = [
        ':name' => $_POST['name'],
        ':username' => $_POST['username'],
        ':password' => password_hash($_POST['password']),
    ];
    $database->insertData();

    header('location: login.php');
}

//View
require $_SERVER['DOCUMENT_ROOT'].'/views/header.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/components/registerform.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php';
