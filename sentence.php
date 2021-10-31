<?php
    #Get game and select
    if(isset($_GET['game'])) {
        $game = $_GET['game'];
    }
    if(isset($_GET['select'])) {
        $game = $_GET['select'];
    } else {
        $selete = "#sentence";
    }
    
    //Read all sentence
    switch ($game)
    {
        case 'bh3':
            $sentences = file('sentence/bh3.txt');
            break;
        case 'ys':
            $sentences = file('sentence/ys.txt');
            break;
        default:
            $sentences = array_merge(file('sentence/bh3.txt'),file('sentence/ys.txt'));
            break;
    }
        
    //Choose one line at random
    $sentence  = trim($sentences[array_rand($sentences)]);

    //output the js,json or text
    if (isset($_GET['encode']) && $_GET['encode'] == 'js') {
        echo "document.querySelector('".$selete."').innerText='".$sentence."';";
    }else if(isset($_GET['encode']) && $_GET['encode'] == 'json'){
        header('Content-type:text/json');
        $sentence = array('text'=>$sentence);
        echo json_encode($sentence, JSON_UNESCAPED_UNICODE);
    }else {
        echo $sentence;
    }
?>