<?php

declare(strict_types=1);

session_start();

//Check if post data is submitted
if (isset($_POST['username'])) {
    require $_SERVER['DOCUMENT_ROOT'].'/database/dbConnect.php';
    $database = new dbConnect();

    //Check if username is already taken
    $validationQuery = 'SELECT user.username FROM user WHERE user.username = :username';
    $params = [
        ':username' => $_POST['username'],
    ];

    //If not add user & redirect to login page
    if (!empty($database->getData($validationQuery, $params))) {

        //Create user
        $insertQuery = 'INSERT INTO user (id, name, username, password) VALUES (NULL, :name, :username, :password)';
        $params = [
        ':name' => strip_tags($_POST['name']),
        ':username' => strip_tags($_POST['username']),
        ':password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
        ];
        $database->setData($insertQuery, $params);

        //Redirect to login
        header('location: login.php');
    }
}

//View
require $_SERVER['DOCUMENT_ROOT'].'/views/header.php';
require $_SERVER['DOCUMENT_ROOT'].'/views/components/registerform.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php';
