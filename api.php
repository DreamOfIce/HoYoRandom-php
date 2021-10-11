<?php

    $domain = 'https://'.$_SERVER['SERVER_NAME'];
    $img_api = '/img.php';
    $hitokoto_api = '/Hitokoto.php';
    $music_api = '/music.php';
    $video_api = '/video.php';

    if(!isset($_GET['type'])) {
        die('Input Error');
    }

    if(isset($_GET['game'])) {
        $parm_game = 'game='.$_GET['game'];
    } else {
        $parm_game = '';
    }
    if(isset($_GET['encode'])) {
        $parm_encode = 'encode='.$_GET['encode'];
    } else {
        $parm_encode = '';
    }
    if(isset($_GET['cdn'])) {
        $parm_cdn = 'cdn='._GET['cdn'];
    } else {
        $parm_cdn = '';
    }

    if((isset($_GET['encode']) && $_GET['type']=='hitokoto' || $_GET['type'] != 'hitokoto' && isset($_GET['cdn'])) && isset($_GET['game'])) {
        $parm_and = '&';
    } else {
        $parm_and = '';
    }

    switch($_GET['type']) {
        case 'img':
            header('Location'.$domain.$img_api.'?'.$parm_game.$parm_and.$parm_cdn);
            break;
        case 'hitokoto':
            header('Location'.$domain.$hitokoto_api.'?'.$parm_game.$parm_and.$parm_encode);
            break;
        case 'music':
            header('Location'.$domain.$music_api.'?'.$parm_game.$parm_and.$parm_cdn);
            break;
        case 'video':
            header('Location'.$domain.$video_api.'?'.$parm_game);
            break;
        default:
            die('Input Error');
    }


?>