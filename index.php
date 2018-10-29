<?php

declare(strict_types=1);

//Logic files
require __DIR__.'/vendor/autoload.php';

use EasyConnect\EasyConnect;

session_start();

$database = new EasyConnect();

//Build array of data
$query =
'SELECT posts.id, posts.title, posts.content, posts.likes, posts.creationdate, user.name FROM posts
INNER JOIN user ON posts.user_id = user.id ORDER BY posts.creationdate DESC LIMIT 25';

$posts = $database->getData($query);

//View
require __DIR__.'/views/header.php';

if (isset($posts)) {
    require __DIR__.'/views/components/posts.php';
} else {
    echo 'An error has occured';
}

require __DIR__.'/views/footer.php';
