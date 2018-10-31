<?php

declare(strict_types=1);

//Logic files
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use EasyConnect\EasyConnect;

$database = new EasyConnect();

//Recieved request
$request = json_decode(file_get_contents('php://input'));

if (isset($request->id) && isset($request->likes)) {
    //Update
    $insert_query = 'UPDATE posts SET likes = likes + :likes WHERE posts.id = :id';
    $params = [
    ':likes' => $response[0]['likes'] + $request->likes,
    ':id' => $request->id,
];

    $database->setData($insert_query, $params);
}
