<?php
//get parameter
$category = $_GET['game'] ?? '.*';
$type = $_GET['type'] ?? 'raw';
$url = $_ENV['RES_URL'] ?? http_response_code(500) && die('RES_URL_NOT_DEFINED');

//generate the list
$regexp = '/^(video\/' . $category . '\/).*(\.mp4)$/i';
$videos = array();
foreach (json_decode(file_get_contents(__DIR__ . '/contents.json')) as $name => $path) {
    if (preg_match($regexp, $path) == 1) {
        array_push($videos, array('name' => $name, 'path' => rawurlencode($url . $path)));
    }
}
$videos ?: http_response_code(500) && die('list of video is empty');

//get a random image
$video = $videos[array_rand($videos)];

//output
if ($type == 'json') {
    header('Content-Type: application/json');
    header('Charset: UTF-8');
    echo json_encode(array('name' => $video['name'], 'url' => $video['path']), JSON_UNESCAPED_UNICODE);
} else {
    header("Location:" . $video['path']);
}
