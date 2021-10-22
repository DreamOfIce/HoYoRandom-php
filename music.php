<?php
# Get Folder
switch ($_GET['game'])
{
    case 'bh3':
        $folder = '/music/bh3/';
        break;
    case 'ys':
        $folder = '/music/ys/';
        break;
    default:
        $folders = array('/music/ys/','/music/bh3/');
        $folder = $folders[array_rand($folders)];
}
# Get the file list
$files = scandir('.'.$folder);
unset($files[0],$files[1]);

#Redirect
if(isset($_GET['cdn']) && $_GET['cdn']='false') {
    header("Location:".$folder.$files[array_rand($files)]);
} else {
    header("Location:".$_ENV['CDN_ADDR'].$folder.$files[array_rand($files)]);
}
?>