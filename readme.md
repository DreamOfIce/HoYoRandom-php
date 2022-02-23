![logo](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/banner.jpg "超级缝合怪")

&#x20; &#x20;

# 原神、崩3随机API

\[TOC]

包括原神&崩坏3精选图片、音乐、视频以及名台词.
*支持自定义CDN*\
你可以直接用我提供的服务,或者免费部署到Koyeb&自己的服务器
萌新的第一个项目,请多多指教q(≧▽≦q)
目前资源库内容很少，希望大家可以积极贡献 O(∩\_∩)O\
投稿&意见可以在底部[留言](#留言板)或发[邮件](mailto:admin@dreamofice.cn)给我

## 项目地址

> 推荐前往以下网站查看,部分预览在Github上不可用

[项目网站](https://www.dreamofice.cn/project/HoYoRandom/)(暂时不可用）\
[我的博客](https://www.dreamofice.cn/)

## 镜像存储库

> 你可以在任何一处查看q(≧▽≦q)\
> [Github](https://github.com/Creeper2077/random-api)\
> [Coding](https://dreamofice.coding.net/public/public/HoYoRandom-PHP/git/files)

## 资源整理

整理了一下资源,想要的可以自行下载

1.  崩坏3壁纸集
    持续更新
    [Github](https://github.com/DreamOfIce/honkai3Wallpaper)\
    [Coding](https://dreamofice.coding.net/public/public/honkai3Wallpaper/git/files)

## 使用方法

### 随机图片

随机显示原神或崩坏3的图片，目前全部为1920\*1080,webp格式\
存放于 [img目录](/img)

*   接口\
    <https://api.dreamofice.cn/random-v0/img.php>

*   参数\
    **game**

> 选择目标游戏(崩崩崩 OR 原神)\
> 可选值:bh3 ys\
> 默认值:随机

*   演示\
    *试着刷新页面，图片会改变哦*\
    ![崩3随机图片](https://api.dreamofice.cn/random-v0/img.php?game=bh3 "这是随机的哦")\
    ![原神随机图片](https://api.dreamofice.cn/random-v0/img.php?game=ys "这是随机的哦")

***

### 名台词

包含崩3,原神的名台词、名梗，目前内容还很少，欢迎大家积极贡献  ヾ(≧▽≦\*)o

*   接口\
    <https://api.dreamofice.cn/random-v0/sentence.php>

*   参数\
    **game**

> 选择目标游戏(崩崩崩 OR 原神)\
> 可选值:bh3 ys\
> 默认值:随机\
> **encode**\
> 指定返回格式\
> 可选值:js json text\
> 默认值:text\
> **selete**\
> 指定选择器,配合*encode=js*使用\
> 默认值:#sentence

*   返回值\
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

### 随机音乐

包含网易云音乐中原神,崩3的所有专辑,格式为mp3\
存放于[music目录](/music)

*   接口\
    <https://api.dreamofice.cn/random-v0/music.php>

*   参数\
    **game**

> 选择目标游戏(崩崩崩 OR 原神)\
> 可选值:bh3 ys\
> 默认值:随机

*   演示\
    *试着刷新页面，音乐会改变哦 (GitHub似乎无法显示)\`(*>﹏<*)′*

似乎不支持预览(っ °Д °;)っ

***

### 随机视频

目前包含崩3动画短片以及原神EV,分辨率720P 24FPS,格式 *webm* ,为了缩小体积画质有些取舍哈

> 注意:无法使用jsdelivr,有20M的大小限制
> 存放于[video目录](/video)

*   接口\
    <https://api.dreamofice.cn/random-v0/video.php>

*   参数\
    **game**

> 选择目标游戏(三崩子 OR 原神)\
> 可选值:bh3 ys\
> 默认值:随机

*   演示

> 试着刷新页面，视频会改变哦

***

### 通用接口

> 此通用接口会将数据重定向至各个接口

*   接口\
    <https://api.dreamofice.cn/random-v0/api.php>

*   参数

**type**

> 选择类型

可选值:img sentence music video

**game**

> 选择目标游戏(崩崩崩 OR 原神)

可选值:bh3 ys\
默认值:bh3

**encode**

> 指定返回格式,仅当type=sentence时生效

可选值:js json text\
默认值:text

## 部署

### 部署到Koyeb

查看[DEMO](https://random-v0-dreamofice.koyeb.app)\
[部署到Koyeb]（<https://www.koyeb.com/static/images/deploy/button.svg）]（https://app.koyeb.com/deploy?type=git&name=HoYoRandom&ports=8080;http;/&repository=github.com/DreamOfIce/HoYoRandom-php&branch=main）>

> Koyeb仍在内测,注册后会弹出等待页面,需联系工作人员开通

Tips:

*   Koyeb每月有\$5的免费额度,所以实例大小建议选nano;

*   Koyeb使用的是fastly的CDN,在国内访问速度还可以;

*   Koyeb每个实例免费流量100GB每月,超出部分\$0.04/GB.

### 部署到VPS

1.  把源码拷贝到网页目录

2.  配置CDN(可选)

## 配置CDN

将CDN地址写入环境变量 *CDN\_ADDR* 即可(一定要以\*https\://\*开头),以下列举了几种实测可行的白嫖方案:

*   Cloudflare
    没有优选IP的情况下速度不太理想,记得要自定义规则配置,缓存webm和mp3(webp会默认缓存)

*   Jsdelivr
    速度快,且方便的选择,但有20M的大小限制,意味着无法加速视频。
    CDN地址填你Fork的仓库的加速地址即可:
    示例:<https://cdn.jsdelivr.net/gh/你的用户名/random-api@main>
    **声明** : 请在使用前阅读并遵守Jsdelivr的[使用协议](https://www.jsdelivr.com/terms/acceptable-use-policy-jsdelivr-net).珍惜免费服务,切勿滥用!
    造成的任何后果本人概不负责

## TODO

*   [x] 给视频加上CDN

*   [ ] 从Git获取文件列表,使API与资源分离

*   [x] 提高较小视频的画质

*   [ ] 使用nodejs重写

## LICENSE

> 本程序使用GNU GENERAL PUBLIC LICENSE 3.0协议授权
> 部分资源来源于网络,仅供个人使用
