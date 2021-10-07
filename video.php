<?php
# Init Array
$files = array();

#Enter Your domain
$domain = $_SERVER['SERVER_NAME'];

# Get Folder
if(isset($_GET['game']) && $_GET['game']='ys') {
    $folder = '/video/ys/';
}else {
    # Set Default Folder
    $folder = '/video/bh3/';
}

# Set Full Path
$path = $_SERVER['DOCUMENT_ROOT'] . '/' . $folder;
# Open Directory
if($handle = opendir($path)) {
# Loop Through Directory
    while(false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            if(substr($file, -3) == 'mp4' || substr($file, -4) == 'webm' || substr($file, -4) == 'm4a') $files[count($files)] = $file;
        }
    }
}
# Close Handle
closedir($handle);
# Init Random
$random = rand(0, count($files)-1);

# Read File
header("Location:".$domain.$folder.$files[$random]);
?>
