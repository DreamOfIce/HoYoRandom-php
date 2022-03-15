# HoYoRandom-php

![GitHub commit activity](https://img.shields.io/github/commit-activity/m/dreamofice/HoYoRandom-php)![GitHub Repo stars](https://img.shields.io/github/stars/dreamofice/HoYoRandom-php)![GitHub forks](https://img.shields.io/github/forks/dreamofice/HoYoRandom-php)
包括原神&崩坏3精选图片、音乐、视频以及名台词.
欢迎[Fork](https://github.com/DreamOfIce/HoYoRandom-php/fork)和[PR](https://github.com/DreamOfIce/HoYoRandom-php/pulls);
[项目网站](https://www.dreamofice.cn/project/HoYoRandom/)

# 开发进度
*   [x] 给视频加上CDN
*   [x] 从Git获取文件列表,使API与资源分离
*   [x] 提高较小视频的画质
*   [ ] 使用nodejs重写 (准备中)

# 镜像存储库

> 你可以在任何一处查看q(≧▽≦q)
> [Github](https://github.com/DreamOfIce/HoYoRandom-php)
> [Coding](https://dreamofice.coding.net/public/public/HoYoRandom-PHP/git/files)

# 使用方法

## 随机图片

随机显示原神或崩坏3的图片，目前全部为1920*1080,webp格式
存放于 [img目录](/img)

*   接口
    https://api.dreamofice.cn/random-v0/img.php
*   参数
    **game**

> 选择目标游戏(崩崩崩 OR 原神)
> 可选值:bh3 ys
> 默认值:随机

*   演示
    *试着刷新页面，图片会改变哦*
    ![崩3随机图片](https://api.dreamofice.cn/random-v0/img.php?game=bh3 "这是随机的哦")
    ![原神随机图片](https://api.dreamofice.cn/random-v0/img.php?game=ys "这是随机的哦")

***

## 名台词

包含崩3,原神的名台词、名梗，目前内容还很少，欢迎大家积极贡献  ヾ(≧▽≦*)o

*   接口
    https://api.dreamofice.cn/random-v0/sentence.php
*   参数
    **game**

> 选择目标游戏(崩崩崩 OR 原神)
> 可选值:bh3 ys
> 默认值:随机
> **encode**
> 指定返回格式
> 可选值:js json text
> 默认值:text
> **selete**
> 指定选择器,配合*encode=js*使用
> 默认值:#sentence

*   返回值
    *encode=js*

```javascript
document.querySelector('#sentence').innerText='为世界上所有的美好而战';
```

*encode=json*

```json
{"text":"为世界上所有的美好而战"}
```

*encode=text*

    为世界上所有的美好而战

*   演示

> 试着刷新页面，句子会改变哦(需要js)

***

## 随机音乐

包含网易云音乐中原神,崩3的所有专辑,格式为mp3
存放于[music目录](/music)

*   接口
    https://api.dreamofice.cn/random-v0/music.php
*   参数
    **game**

> 选择目标游戏(崩崩崩 OR 原神)
> 可选值:bh3 ys
> 默认值:随机

*   演示
    *试着刷新页面，音乐会改变哦 (GitHub似乎无法显示)`(*>﹏<*)′*

似乎不支持预览(っ °Д °;)っ

***

## 随机视频

目前包含崩3动画短片以及原神EV,分辨率720P 24FPS,格式 *webm* ,为了缩小体积画质有些取舍哈

> 注意:无法使用jsdelivr,有20M的大小限制
> 存放于[video目录](/video)

*   接口
    https://api.dreamofice.cn/random-v0/video.php
*   参数
    **game**

> 选择目标游戏(三崩子 OR 原神)
> 可选值:bh3 ys
> 默认值:随机

*   演示

> 试着刷新页面，视频会改变哦

***

# 部署

## 部署到Koyeb

查看[DEMO](https://random-v0-dreamofice.koyeb.app)
[![部署到Koyeb](https://www.koyeb.com/static/images/deploy/button.svg)](https://app.koyeb.com/deploy?type=git&name=HoYoRandom&ports=8080;http;/&repository=github.com/DreamOfIce/HoYoRandom-php&branch=main)

点击上面的按钮部署,实例大小建议选择nano.

## 部署到VPS

1.  把源码拷贝到网页目录

2.  配置CDN(可选)

# 配置CDN

将CDN地址写入环境变量 *CDN_ADDR* 即可(一定要以*https://*开头),以下列举了几种实测可行的白嫖方案:

*   Cloudflare
    没有优选IP的情况下速度不太理想,记得要自定义规则配置,缓存webm和mp3(webp会默认缓存)

*   Jsdelivr
    速度快,且方便的选择,但有20M的大小限制,意味着无法加速视频。
    CDN地址填你Fork的仓库的加速地址即可:
    示例:https://cdn.jsdelivr.net/gh/你的用户名/HoYoRandomResources@main    **声明** : 请在使用前阅读并遵守Jsdelivr的[使用协议](https://www.jsdelivr.com/terms/acceptable-use-policy-jsdelivr-net).珍惜免费服务,切勿滥用!
    造成的任何后果本人概不负责


# LICENSE

> GNU GENERAL PUBLIC LICENSE 3.0
