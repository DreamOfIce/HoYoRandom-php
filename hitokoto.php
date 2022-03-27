<?php
//get parameters
$category = $_GET['game'] ?? '';
$encode = $_GET['encode'] ?? 'json';
$selete = $_GET['select'] ?? "#hitokoto";

//read the hitokotos
$hitokotos = array();
foreach (scandir(__DIR__ . '/hitokoto/') as $file) {
    if (is_file(__DIR__ . '/hitokoto/' . $file) && preg_match('/(' . $category . '\.hitokoto\.json)$/i', $file) == 1) {
        foreach (json_decode(file_get_contents(__DIR__ . '/hitokoto/' . $file)) as $hitokoto) {
            for ($i = 0; $i < $hitokoto->w; $i++) {
                array_push($hitokotos, $hitokoto->s);
            }
        }
    }
}
$images ?: http_response_code(500) && die('list of hitokoto is empty');

//get a random hitokoto
$hitokoto = $hitokotos[array_rand($hitokotos)];

//output
header('Charset: UTF-8');
switch ($encode) {
    case 'text':
        header('Content-Type: text/plain');
        echo $hitokoto;
        break;
    case 'js':
        header('Content-Type: application/javascript');
        echo 'document.querySelector(\'' . $selete . '\').innerText=\'' . $hitokoto . '\';';
        break;
    default:
        header('Content-type:text/json');
        echo json_encode(array('hitokoto' => $hitokoto), JSON_UNESCAPED_UNICODE);
        break;
}
