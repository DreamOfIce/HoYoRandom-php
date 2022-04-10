# HoYoRandom-PHP | 部署  
使用方法请见[README](readme.md)  

[TOC]  

# 部署
> 环境变量配置见[此处](#环境变量)  

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
> 点击前往[控制台](https://dashboard.render.com/).注意不要开Chrome的翻译,容易白屏.  

1. 建议直接用Github注册登录;
2. 点击右上角`New +`,在下拉菜单中选择`Web service`;
3. 输入本存储库URL:
        https://github.com/DreamOfIce/HoYoRandom-php
4. 回车后进入配置页面,其中`Region`建议选新加坡(`Singapore`);
5. 点击底部的`Advanced`,参考[此节](#环境变量)添加环境变量;
6. 最后点击`Create Web Service`.

## 使用Docker部署
镜像基于[Nginx-PHP-fpm](https://gitlab.com/ric_harvey/nginx-php-fpm)构建.  
> Docker Hub镜像: `dreamofice/hoyorandom-php`  
> 国内阿里云镜像: `registry.cn-guangzhou.aliyuncs.com/dreamofice/hoyorandom-php`  

替换环境变量并执行以下命令,将在8002端口上运行本项目:
```` shell
docker run -d --name='HoYoRandom-php' -p 8002:80 \
-e RES_REPO_NAME='DreamOfIce/HoYoRandomResources' \
RES_URL='https://cdn.example.cn/path/to/the/resource/' \
GITHUB_AUTH='Username:gh_tokenhere' \
WEBHOOK_SECRECT='Your Secret' \
dreamofice/hoyorandom-php
````

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
        try_files $uri $uri/index.html $uri.html $uri.php$is_args$args;
    }
    ````
4. 完成啦§(*￣▽￣*)§

-------

# 环境变量
|     环境变量      |                  描述                   |        值        |                      示例                      | 必填  |
| :---------------: | :-------------------------------------: | :--------------: | :--------------------------------------------: | :---: |
|  `RES_REPO_NAME`  |         存放资源的Gitub存储库名         |  Username/Repo   |        `DreamOfIce/HoYoRandomResources`        |  是   |
|     `RES_URL`     |              资源文件的URL              |   URL(带协议)    | `https://cdn.example.cn/path/to/the/resource/` |  是   |
|   `GITHUB_AUTH`   |            用于调用GithubAPI            | User:GithubToken |            `Username:gh_tokenhere`             |  否   |
| `WEBHOOK_SECRECT` | 验证webhook请求(见[此处](#配置webhook)) |    任意字符串    |               `vStTKNqE39oqIJqY`               |  否   |
> 注意事项  
> 1. 为避免达到GithubAPI限制,建议填写`GITHUB_AUTH`.关于如何创建Token,请见[此处](https://docs.github.com/cn/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token);  
> 2. 墙裂推荐填写`WEBHOOK_SECRECT`,以免Token被滥用.  

------

# 部署资源存储库
- 以下以我的存储库为例:[HoYoRandomResources](https://github.com/DreamOfIce/HoYoRandomResources).
- 关于使用自定义存储库,请见[自定义资源存储库](#自定义资源存储库)一节.
- 
## PaaS平台
1. 部署一节中所有PaaS平台都可以部署资源存储库;
2. 还可以部署至以下PaaS平台: [Vercel](https://vercel.com/) [4EVERLAND](https://4everland.org/);
3. 可以加一层Cloudflare反代,并配合自选IP达到更好的效果([新版自选IP详细教程(待填坑)](https://www.dreamofice.cn/)).
4. 欢迎补充!

## 部署到VPS
将$webRoot替换为你的web目录,执行以下命令以克隆存储库并配置自动更新:
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

# 配置Webhook
1. Fork[我的资源存储库](https://github.com/DreamOfIce/HoYoRandomResources)或进入你的自定义资源存储库;
2. 点击`Settings`选项卡,并选择`Webhooks`;  
3. 点击`Add webhook`,并完成密码验证;  
4. 将Payload URL改为以下格式(删掉大括号):  
        https://{你的API地址}/update?s={你的Secret}
5. 无需修改其他选项,直接点击`Add Webhook`;  
6. 完成（￣︶￣）↗　

------

# 自定义资源存储库
可参照[HoYoRandomResources](https://github.com/DreamOfIce/HoYoRandomResources)  
需要更多格式可以自己改代码(￣_,￣ )
## 图片
- 存放于`img`目录下,二级目录为游戏名;  
- 默认可识别格式:`webp`,`png`,`jpg`,`jpeg`,`gif`;  
- 示例: `img/bh3/51a65d2b6dfec78bc8cb3afd732441964917c329.webp`.  

## 音乐
- 存放于`music`目录下,二级目录为游戏名;  
- 默认可识别格式:`mp3`,`ogg`,`wmv`;  
- 示例: `music/ys/HOYO-MiX - Path of Yaksha 捷疾之业.mp3`.  

## 视频
- 存放于`video`目录下,二级目录为游戏名;  
- 默认可识别格式:`mp4`,`webm`;  
- 示例: `video/bh3/102759887-1-208.mp4`.  

## 一言
- 存放于`hitokoto`目录下;  
- 文件名为`游戏名.hitokoto.json`(例如`ys.hitokoto.json`);  
- 内容为JSON数组,每个对象包含`s`(sentence)和`w`(wight)两个键,分别为句子和权重;
- [示例文件](https://github.com/DreamOfIce/HoYoRandomResources/blob/master/hitokoto/bh3.hitokoto.json).
