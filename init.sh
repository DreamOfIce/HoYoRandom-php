#!/bin/sh
#此脚本用于首次获取资源列表

#暂时删除环境变量WEBHOOK_SECRECT
webhookSecret="${WEBHOOK_SECRECT}"
export WEBHOOK_SECRET=''

#添加PHP到PATH(适用于heroku系)

if [ ! $(type php) ]; then
    export PATH='./.heroku/php/bin'
fi

#执行脚本
php ./update.php
#恢复环境变量
export WEBHOOK_SECRET="${webhookSecret}"
