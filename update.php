<?php

#FUNCTIONS
#Curl get function
function curlGet($url, $ua, $isJson, $header = array())
{
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    $response = curl_exec($ch);
    echo curl_error($ch).'rep:'.$response;
    curl_close($ch);
    if ($isJson) {
        return json_decode($response);
    } else {
        return $response;
    }
}

#Get the directory
function getDirectory($repo, $path)
{
    $rep = curlGet('https://api.github.com/repos/'.$repo.'/contents/'.$path, 'HoYoRandom-PHP', true);
    $files = array();
    foreach ($rep as $file) {
        switch ($file['type']) {
            case 'file':
                if (!!pcre_match('/\.(png|jpe?g|webp)$/i', $file['name']) && !isset($files[$file['name']])) {
                    #add to list of files
                    $files[$file['name']] = $file['path'];
                }
                break;
            case 'dir':
                if (substr($file['name'], 0, 1) != '.') {
                    $files = array_merge($files, getDirectory($repo, '/'.$file['path']));
                }
                break;
            default:
                break;
        }
    }
    return $files;
}

#verify the secret
function verifySecret($reqBody, $singature)
{
    $secret = $_ENV['WEBHOOK_SECRECT'];
    $result = 'sha256='+hash_hmac('sha256', $reqBody, $secret, false);
    return ($result == $singature);
}

#MAIN
#verify request
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(405);
    die('Method Not Allowed');
}
if (isset($_ENV['WEBHOOK_SECRECT']) && verifySecret($GLOBALS['HTTP_RAW_POST_DATA'], $_SERVER['HTTP_X_HUB_SINGATURE_256'])) {
    http_response_code(403);
    die('Invalid Secret');
}

#get the directory
$repo = $_ENV['RES_REPO_NAME'];
$files = getDirectory($repo, '/');

#Download the *.hitokoto.json
foreach ($files as $file) {
    if (pcre_match('/\.hitokoto\.json$/i', $file['name'])) {
        $downloadUrl = curlGet('https://api.github.com/repos/'.$_ENV['RES_REPO_NAME'].'/content/'.$file['path'], true, 'HoYoRandom-PHP', true)['download_url'];
        file_put_contents(__DIR__+'../hitokoto/'+$file[name], curlGet($downloadUrl, 'HoYoRandom-PHP'));
    }
}

#write `contents.json`
foreach (array('img','music','video') as $type) {

}
file_put_contents(__DIR__.'../contents.json', json_encode($files));
echo 'Done!';