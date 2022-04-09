# HoYoRandom-PHP | 部署  
使用方法请见[README](readme.md)  

[TOC]  

# 部署
## 部署到Koyeb  
查看[DEMO](https://random-v0-dreamofice.koyeb.app) 
> 点击按钮部署.   

[![部署到Koyeb](https://www.koyeb.com/static/images/deploy/button.svg)](https://app.koyeb.com/deploy?type=git&name=HoYoRandom&ports=8080;http;/&env[RES_REPO_NAME]=DreamOfIce/HoYoRandomResources&env[RES_URL]=https://cdn.example.cn/path/to/the/resource/&env[GITHUB_AUTH]=Username:gh_tokenhere&env[WEBHOOK_SECRECT]=vStTKNqE39oqIJqY&repository=github.com/DreamOfIce/HoYoRandom-php&branch=main&build_command=bash%20./scripts/init.sh)  

## 部署到Heroku
查看[DEMO](https://hoyorandom-php.herokuapp.com) 
> 点击按钮部署.  

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

## 部署到Railway
查看[DEMO](https://hoyorandom-php.up.railway.app)
> 点击按钮部署.  

[![Deploy on Railway](https://railway.app/button.svg)](https://railway.app/new/template/BpuYV4)

## 部署到Render
查看[DEMO](https://hoyorandom.onrender.com)  
> 点击按钮部署.  

[![Deploy to Render](https://render.com/images/deploy-to-render-button.svg)](https://render.com/deploy?repo=github.com/DreamOfIce/HoYoRandom-php)

## 部署到VPS
1. 安装Nginx,PHP和Git;
2. 将$webRoot替换为你的web目录,并执行以下命令:
    ````shell
    webRoot='/var/www/HoYoRandom-PHP'
    cd ${webRoot}
    git clone https://github.com/DreamOfIce/HoYoRandom-PHP.git --depth=1
    cd ${HOME}
    mkdir -p ./script/hoyorandom
    echo "#!/bin/sh
    cd ${webRoot}
    git pull --depth=1 >/dev/null
    if [ ! $? ]; then
        git pull --depth=1 --rebase >/dev/null
    fi" > ${HOME}/script/hoyorandom/updateapi.sh
    chmod 777 ${HOME}/script/hoyorandom/updateapi.sh
    (crontab -l | echo "*/10 * * * * ${HOME}/script/hoyorandom/updateapi.sh" ) | crontab -
    ````
3. 将以下内容加入站点配置:
    ````nginx
    location / {
        try_files $uri $uri/index.html $uri.php$is_args$args;
    }
    ````
4. 完成啦§(*￣▽￣*)§

-------

# 环境变量
|     环境变量      |            描述             |        值        |                      示例                      | 必填  |
| :---------------: | :-------------------------: | :--------------: | :--------------------------------------------: | :---: |
|  `RES_REPO_NAME`  |    存放资源的Gitub仓库名    |  Username/Repo   |        `DreamOfIce/HoYoRandomResources`        |  是   |
|     `RES_URL`     |        资源文件的URL        |   URL(带协议)    | `https://cdn.example.cn/path/to/the/resource/` |  是   |
|   `GITHUB_AUTH`   |      用于获取资源目录       | User:GithubToken |            `Username:gh_tokenhere`             |  否   |
| `WEBHOOK_SECRECT` | 验证webhook请求(见[此处]()) |    任意字符串    |               `vStTKNqE39oqIJqY`               |  否   |

> 注意事项  
> 1. Github API对未经验证的用户有60req/h/IP的限制,并且由于PaaS平台IP共享,实际可用值会更低.所以墙裂建议使用;  
> 2. 墙裂推荐填写`WEBHOOK_SECRECT`,以免Token被滥用.  

------

# 部署资源仓库
- 以下以我的仓库为例:[HoYoRandomResources](https://github.com/DreamOfIce/HoYoRandomResources).
- 关于使用自定义仓库,请见[自定义资源仓库](#自定义资源仓库)一节.
- 
## PaaS平台
1. 部署一节中所有PaaS平台都可以部署资源仓库;
2. 还可以部署至以下PaaS平台: [Vercel](https://vercel.com/) [4EVERLAND](https://4everland.org/);
3. 可以加一层Cloudflare反代,并配合自选IP达到更好的效果([新版自选IP详细教程](待填坑)).
4. 欢迎补充!

## 部署到VPS
将$webRoot替换为你的web目录,执行以下命令以克隆仓库并配置自动更新:
````shell
webRoot='/var/www/HoYoRandomResources'
cd ${webRoot}
git clone https://github.com/DreamOfIce/HoYoRandomResources.git --depth=1
cd ${HOME}
mkdir -p ./script/hoyorandom
echo "#!/bin/sh
cd ${webRoot}
git pull --depth=1 >/dev/null
if [ ! $? ]; then
    git pull --depth=1 --rebase >/dev/null
fi" > ${HOME}/script/hoyorandom/updateres.sh
chmod 777 ${HOME}/script/hoyorandom/updateres.sh
(crontab -l | echo "*/10 * * * * ${HOME}/script/hoyorandom/updateres.sh" ) | crontab -
````

------

# 保护Webhook

------

# 自定义资源仓库