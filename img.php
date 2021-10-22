<?php
# Get Folder
switch ($_GET['game'])
{
    case 'bh3':
        $folder = '/img/bh3';
        break;
    case 'ys':
        $folder = '/img/ys';
        break;
    default:
        $folders = array('/img/ys/','/img/bh3/');
        $folder = array_rand($folders);
}
# Get the file list
$files = scandir(__DIR__.$folder);
unset($files[array_search('.')],$files[array_search('..')]);

#Redirect
if(isset($_GET['cdn']) && $_GET['cdn']='false') {
    header("Location:".$folder.array_rand($files));
} else {
    header("Location:".$_ENV['CDN_ADDR'].$folder.array_rand($files));
}
?>