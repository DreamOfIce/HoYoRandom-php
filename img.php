<?php
# Init Array
$files = array();

#URL of the jsdelivr
$cdn = 'https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main';

# Get Folder
if(isset($_GET['game']) && $_GET['game']='ys') {
    $folder = '/img/ys/';
}else {
    # Set Default Folder
    $folder = '/img/bh3/';
}

# Set Full Path
$path = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder;
# Open Directory
if($handle = opendir($path)) {
# Loop Through Directory
    while(false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            if(substr($file, -4) == 'webp') $files[count($files)] = $file;
        }
    }
}
# Close Handle
closedir($handle);
# Init Random
$random = rand(0, count($files)-1);
#Generate the URL

# Read File
header("Location:".$cdn.$folder.$files[$random]);
?>
