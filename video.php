<?php
# Init Array
$files = array();

#URL of the CDN
$cdn = $_ENV['CDN_ADDR'];

# Get Folder
switch ($_GET['game'])
{
    case 'bh3':
        $file = file($path.'/video/bh3/');
        break;
    case 'ys':
        $file = file($path.'/video/ys/');
        break;
    default:
        $file = file($path.array_rand(array('/video/ys/','/video/bh3/')));
}

# Set Full Path
$path = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder;
# Open Directory
if($handle = opendir($path)) {
# Loop Through Directory
    while(false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            if(substr($file, -4) == 'webm') $files[count($files)] = $file;
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
