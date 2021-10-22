<?php
    //读入所有句子
    switch ($_GET['game'])
    {
        case 'bh3':
            $sentences = file('sentence/bh3.txt');
            break;
        case 'ys':
            $sentences = file('sentence/ys.txt');
            break;
        default:
            $sentences = array_merge(file('sentence/bh3.txt'),file('sentenceys.txt'));
            break;
    }
        
    //Read one line at random
    $senctence  = array_rand($senctences);

    //output the js,json or text
    if (isset($_GET['encode']) && $_GET['encode'] == 'js') {
        echo 'document.write('.$sentence.');';
    }else if(isset($_GET['encode']) && $_GET['encode'] == 'json'){
        header('Content-type:text/json');
        $senctence = array('text'=>$senctence);
        echo json_encode($senctence, JSON_UNESCAPED_UNICODE);
    }else {
        echo $senctence;
    }
?>