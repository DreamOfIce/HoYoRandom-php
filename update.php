<?php

#FUNCTIONS
#Curl get function
function curlGet($url, $ua, $header = array())
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

#Get the directory
function getDirectory($repo, $path)
{
    $rep = json_decode(curlGet('https://api.github.com/repos/' . $repo . '/contents' . $path, 'HoYoRandom-PHP'));
    $files = array();
    foreach ($rep as $file) {
        switch ($file->type) {
            case 'file':
                if (!!preg_match('/\.(png|jpe?g|webp)$/i', $file->name) && !isset($files[$file->name])) {
                    #add to list of files
                    $files[$file->name] = $file->path;
                }
                break;
            case 'dir':
                if (substr($file->name, 0, 1) != '.') {
                    $files = array_merge($files, getDirectory($repo, '/' . $file->path));
                }
                break;
            default:
                break;
        }
    }
    return $files;
}

#Convent tee array include Chinese to Json
function toJson($input){
    $json = json_encode(urlencode($input));
    return urldecode($json);
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
if (!isset($_SERVER['RES_REPO_NAME'])) {
    http_response_code(500);
    die('Server error:RES_REPO_NAME no set!');
}
$repo = $_ENV['RES_REPO_NAME'];
$files = getDirectory($repo, '/');

#Download the *.hitokoto.json
foreach ($files as $file) {
    if (preg_match('/\.hitokoto\.json$/i', $file)) {
        $downloadUrl = curlGet('https://api.github.com/repos/' . $_ENV['RES_REPO_NAME'] . '/contents/' . $file, true, 'HoYoRandom-PHP', true)->download_url;
        file_put_contents(__DIR__+'hitokoto/'+$file, curlGet($downloadUrl, 'HoYoRandom-PHP'));
    }
}

#write `contents.json`
foreach (array('img', 'music', 'video') as $type) {

}
file_put_contents(__DIR__ . '../contents.json', toJson($files));
echo 'Done!';
