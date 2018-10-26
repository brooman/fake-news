<?php

declare(strict_types=1);

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use EasyConnect\EasyConnect;

session_start();

//Check login
if (isset($_POST['username'])) {
    $database = new EasyConnect();

    //Get password from DB
    $query = 'SELECT user.id, user.password FROM user WHERE username = :username';
    $params = [
        ':username' => $_POST['username'],
    ];
    $return = $database->getData($query, $params);

    //Check if requested user exists
    if (!empty($return)) {
        //Verify password
        if (password_verify($_POST['password'], $return[0]['password'])) {
            //Set session variables
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $return[0]['id'];

            //Redirect to admin panel
            header('location: /admin/panel.php');
        }
    }

    //If we did not get redirected it was because either username or password was incorrect
    //So we warn the user exactly that.
    $alert = [
        'type' => 'warning',
        'header' => 'Error',
        'message' => 'Sorry! That username password combination does not exist in our system. Please try again.',
    ];
}

//View

require $_SERVER['DOCUMENT_ROOT'].'/views/header.php';

if (isset($alert)) {
    require $_SERVER['DOCUMENT_ROOT'].'/views/components/alert.php';
}

require $_SERVER['DOCUMENT_ROOT'].'/views/components/loginform.php';

require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php';
