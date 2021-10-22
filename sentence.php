<?php
    //Get the Folder
    $path = dirname(__FILE__);
    switch ($_GET['game'])
    {
        case 'bh3':
            $file = file($path.'/bh3_Sentence.txt');
            break;
        case 'ys':
            $file = file($path.'/ys_Sentence.txt');
            break;
        default:
            $file = file($path.array_rand(array('/ys_Sentence.txt','/bh3_Sentence.txt')));
    }
        
    //Read one line at random
    $arr  = mt_rand( 0, count( $file ) - 1 );
    $content  = trim($file[$arr]);

    //output the js,json or text
    if (isset($_GET['encode']) && $_GET['encode'] == 'js') {
        echo "(function hitokoto(){var hitokoto='" . $content ."';var dom=document.querySelector('#hitokoto');Array.isArray(dom)?dom[0].innerText=hitokoto:dom.innerText=hitokoto;})()";
    }else if(isset($_GET['encode']) && $_GET['encode'] == 'json'){
        header('Content-type:text/json');
        $content = array('text'=>$content);
        echo json_encode($content, JSON_UNESCAPED_UNICODE);
    }else {
        echo $content;
    }
?>