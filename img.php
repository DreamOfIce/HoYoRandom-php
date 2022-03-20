<?php
//get parameter
$category = $_GET['game'] ?? '.*';
$type = $_GET['type'] ?? 'raw';
$url = $_ENV['RES_URL'] ?? http_response_code(500) && die('RES_URL_NOT_DEFINED');

//generate the list
$regexp = '/^(img\/' . $category . '\/).*(\.webp)$/i';
$images = array();
foreach (json_decode(file_get_contents(__DIR__ . '/contents.json')) as $name => $path) {
    if (preg_match($regexp, $path) == 1) {
        array_push($images, array('name' => $name, 'path' => rawurlencode($url . $path)));
    }
}
$images ?: http_response_code(500) && die('list of image is empty');

//get a random image
$image = $images[array_rand($images)];

//output
if ($type == 'json') {
    header('Content-Type: application/json');
    header('Charset: UTF-8');
    echo json_encode(array('name' => $image['name'], 'url' => $image['path']), JSON_UNESCAPED_UNICODE);
} else {
    header("Location:" . $image['path']);
}
