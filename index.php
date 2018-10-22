<?php

declare(strict_types=1);

//Logic files
require __DIR__.'/vendor/autoload.php';

use EasyConnect\Easyconnect;

session_start();

$database = new EasyConnect();

//Build array of data
$query =
'SELECT posts.title, posts.content, posts.creationdate, user.name FROM posts
INNER JOIN user ON posts.user_id = user.id LIMIT 25';

$posts = $database->getData($query, $params);

//View
require __DIR__.'/views/header.php';

if (isset($posts)) {
    require __DIR__.'/views/components/posts.php';
} else {
    echo 'An error has occured';
}

require __DIR__.'/views/footer.php';
