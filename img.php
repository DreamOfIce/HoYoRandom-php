<?php
    /*A random api(Pictures,music,videos and Hitokoto)of Honkai Impact 3 & Genshin Impact
    Copyright (C) 2021  Creeper2077

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
    email:admin@creeper2077.online
    */

# Init Array
$files = array();

#domain
$domain = $_SERVER['SERVER_NAME'];

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
            if(substr($file, -3) == 'png' || substr($file, -3) == 'jpg' || substr($file, -4) == 'jpeg') $files[count($files)] = $file;
        }
    }
}
# Close Handle
closedir($handle);
# Init Random
$random = rand(0, count($files)-1);
#Generate the URL
if(isset($_GET['cdn']) && $_GET['cdn']='false') {
    $url = $domain;
} else {
    $url = $cdn;
}

# Read File
header("Location:".$url.$folder.$files[$random]);
?>
