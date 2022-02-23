<?php
    #Get game and select
    if(isset($_GET['game'])) {
        $game = $_GET['game'];
    }
    if(isset($_GET['select'])) {
        $game = $_GET['select'];
    } else {
        $selete = "#hitokoto";
    }
    
    //Read all hitokoto
    switch ($game)
    {
        case 'bh3':
            $hitokotos = file('hitokoto/bh3.txt');
            break;
        case 'ys':
            $hitokotos = file('hitokoto/ys.txt');
            break;
        default:
            $hitokotos = array_merge(file('hitokoto/bh3.txt'),file('hitokoto/ys.txt'));
            break;
    }
        
    //Choose one line at random
    $hitokoto  = trim($hitokotos[array_rand($hitokotos)]);

    //output the js,json or text
    if (isset($_GET['encode']) && $_GET['encode'] == 'js') {
        echo "document.querySelector('".$selete."').innerText='".$hitokoto."';";
    }else if(isset($_GET['encode']) && $_GET['encode'] == 'json'){
        header('Content-type:text/json');
        $hitokoto = array('text'=>$hitokoto);
        echo json_encode($hitokoto, JSON_UNESCAPED_UNICODE);
    }else {
        echo $hitokoto;
    }
?>