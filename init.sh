#!/bin/sh
#此脚本用于首次获取资源列表

#添加PHP到PATH(适用于heroku系)
type php >/dev/null
if [ ! $? ]; then
    echo 'add php to path'
    export PATH="${PWD}/.heroku/php/bin"
fi
#执行脚本
php ./update.php

