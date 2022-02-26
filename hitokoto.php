<?php
#Get parameters
isset($_GET['game']) ? $game = $_GET['game'] : $game = '';
isset($_GET['encode']) ? $encode = $_GET['encode'] : $encode = 'json';
isset($_GET['select']) ? $game = $_GET['select'] : $selete = "#hitokoto";

#read the hitokotos
$hitokotos = array();
foreach (scandir(__DIR__ . '/hitokoto/') as $file) {
    if (is_file(__DIR__ . '/hitokoto/' . $file) && preg_match('/(' . $game . '\.hitokoto\.json)$/i', $file) == 1) {
        foreach (json_decode(file_get_contents(__DIR__ . '/hitokoto/' . $file)) as $hitokoto) {
            for ($i = 0; $i < $hitokoto->w; $i++) {
                array_push($hitokotos, $hitokoto->s);
            }
        }
    }
}

//Choose one line at random
$hitokoto = $hitokotos[array_rand($hitokotos)];

//output
switch ($encode) {
    case 'text':
        header('Content-Type: text/plain');
        header('Charset: UTF-8');
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
