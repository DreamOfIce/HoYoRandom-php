<?php
# Get Folder
switch ($_GET['game'])
{
    case 'bh3':
        $folder = '/video/bh3';
        break;
    case 'ys':
        $folder = '/video/ys';
        break;
    default:
        $folders = array('/video/ys/','/video/bh3/');
        $folder = array_rand($folders);
}
# Get the file list
$files = scandir(__DIR__.$folder);
unset($files[0],$files[1]);

#Redirect
if(isset($_GET['cdn']) && $_GET['cdn']='false') {
    header("Location:".$folder.array_rand($files));
} else {
    header("Location:".$_ENV['CDN_ADDR'].$folder.array_rand($files));
}
?>