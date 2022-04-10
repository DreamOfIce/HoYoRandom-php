<?php
//get parameter
$category = $_GET['game'] ?? '.*';
$type = $_GET['type'] ?? 'raw';
$url = $_ENV['RES_URL'] ?? http_response_code(500) && die('RES_URL_NOT_DEFINED');

//generate the list
$regexp = '/^(music\/' . $category . '\/).*(\.(mp3|ogg|wav))$/i';
$musics = array();
foreach (json_decode(file_get_contents(__DIR__ . '/contents.json')) as $name => $path) {
    if (preg_match($regexp, $path) == 1) {
        array_push($musics, array('name' => $name, 'path' => $url . str_replace('%2F', '/', rawurlencode($path))));
    }
}
$musics ?: http_response_code(500) && die('list of music is empty');

//get a random image
$music = $musics[array_rand($musics)];

//output
if ($type == 'json') {
    header('Content-Type: application/json');
    header('Charset: UTF-8');
    echo json_encode(array('name' => $music['name'], 'url' => $music['path']), JSON_UNESCAPED_UNICODE);
} else {
    header("Location:" . $music['path']);
}
