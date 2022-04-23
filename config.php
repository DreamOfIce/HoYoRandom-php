<?php
//define your config here!
$config = [
    'RES_REPO_NAME' => 'DreamOfIce/HoYoRandomResources',
    'RES_URL' => 'https://cdn.example.cn/path/to/the/resource/',
    'GITHUB_AUTH' => 'Username:gh_tokenhere',
    'WEBHOOK_SECRECT' => 'AnyRandomString',
];

//Environment variables take precedence over this file
define("CONFIG", array_merge($config, getenv(), $_ENV));
