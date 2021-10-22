<?php
# Init Array
$files = array();

#URL of the jsdelivr
$cdn = $_ENV['CDN_ADDR'];

# Get Folder
switch ($_GET['game'])
{
    case 'bh3':
        $file = file($path.'/music/bh3/');
        break;
    case 'ys':
        $file = file($path.'/music/ys/');
        break;
    default:
        $file = file($path.array_rand(array('/music/ys/','/music/bh3/')));
}

# Set Full Path
$path = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder;
# Open Directory
if($handle = opendir($path)) {
# Loop Through Directory
    while(false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            if(substr($file, -3) == 'ogg') $files[count($files)] = $file;
        }
    }
}
# Close Handle
closedir($handle);
# Init Random
$random = rand(0, count($files)-1);
#Generate the URL
if(isset($_GET['cdn']) && $_GET['cdn']='false') {
    header("Location:".$folder.$files[$random]);
} else {
    header("Location:".$cdn.$folder.$files[$random]);
}
