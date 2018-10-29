<?php

declare(strict_types=1);

//Logic files
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use EasyConnect\EasyConnect;

$database = new EasyConnect();

//Recieved request
$request = json_decode(file_get_contents('php://input'));

//Fetch likes
$fetch_query = 'SELECT likes FROM posts WHERE posts.id = :id';
$params = [
    ':id' => $request->id,
];

$response = $database->getData($fetch_query, $params);

//Update
$insert_query = 'UPDATE posts SET likes = :likes WHERE posts.id = :id';
$params = [
    ':likes' => $response[0]['likes'] + $request->likes,
    ':id' => $request->id,
];

$database->setData($insert_query, $params);
