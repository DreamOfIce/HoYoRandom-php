<?php
    //Get the Folder
    $path = dirname(__FILE__);
    if(isset($_GET['game']) && $_GET['game']=='ys') {
        $file = file($path.'/ys_Hitokoto.txt');
    } else {
        # Set Default Folder
        $file = file($path.'/bh3_Hitokoto.txt');
    }
        
    //Read one line at random
    $arr  = mt_rand( 0, count( $file ) - 1 );
    $content  = trim($file[$arr]);
        
    //Coding judgment,used to output the corresponding response header
    if (isset($_GET['charset']) && !empty($_GET['charset'])) {
        $charset = $_GET['charset'];
        if (strcasecmp($charset,"gbk") == 0 ) {
         $content = mb_convert_encoding($content,'gbk', 'utf-8');
        }
    } else {
        $charset = 'utf-8';
    }
        
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