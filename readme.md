![logo](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/banner.jpg "超级缝合怪")

<a href="https://github.com/Creeper2077/random-api/stargazers"><img style="display: inline" src="https://img.shields.io/github/stars/Creeper2077/random-api?style=social"></a>  <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a> <a href="https://github.com/Creeper2077/random-api"><img style="display: inline" src="https://img.shields.io/github/downloads/Creeper2077/random-api/total?style=social"></a>

# 原神、崩3随机API  

[TOC]

包括原神&崩坏3精选图片、音乐、视频以及名台词.
*支持自定义CDN*  
你可以直接用我提供的服务,或者免费部署到Koyeb&自己的服务器
萌新的第一个项目,请多多指教q(≧▽≦q)
目前资源库内容很少，希望大家可以积极贡献 O(∩_∩)O  
投稿&意见可以在底部[留言](#留言板)或发[邮件](mailto:feedback@creeper077.online)给我    

> Also available in [English](/README_en.md)!

## 项目地址
> 推荐前往以下网站查看,部分预览在Github上不可用

[项目网站](https://random-api.creeper2077.online)  
[在我的博客上查看此页面](https://www.creeper2077.online/service/random-api)  

## 镜像存储库
> 本仓库在Github,Gitlab,Bitbucket&Codebreg皆有镜像仓库，你可以在任何一处查看q(≧▽≦q)  
[Github](https://github.com/Creeper2077/random-api)  
[Gitlab](https://gitlab.com/Creeper2077/random-api)  
[Bitbucket](https://bitbucket.org/creeper2077/random-api)  
[Codebreg](https://codeberg.org/creeper2077/random-api)

## 资源整理
整理了一下资源,想要的可以自行下载
1. 崩3壁纸（1920*1080）共382张，*JPG&PNG* **1GB**  
> 来源:崩崩崩官网  
>	b站 崩坏3 _**第三**_ 偶像爱酱 的动态分享  
>	b站 崩坏3 的动态分享  
[下载地址](https://gitea.com/creeper2077/honkai3-wallpaper/archive/211020.zip)  
***
2. 崩3&原神音乐合集  
**网易云歌单**  
> 可配合*aplayer*实现随机播放  
> *playlist:6990221411*  
> [查看歌单](https://music.163.com/#/playlist?id=6990221411)  


## 使用方法

### 随机图片
随机显示原神或崩坏3的图片，目前全部为1920*1080,webp格式  
存放于 [img 目录](/img)  
- 接口  
		https://random-api.creeper2077.online/img.php
- 参数  
**game**  
> 选择目标游戏(崩崩崩 OR 原神)  
可选值:bh3 ys  
默认值:随机  

- 演示  
*试着刷新页面，图片会改变哦*  
![崩3随机图片](https://random-api.creeper2077.online/img.php "这是随机的哦")  
![原神随机图片](https://random-api.creeper2077.online/img.php?game=ys "这是随机的哦")  

***

### 名台词   
包含崩3,原神的名台词、名梗，目前内容还很少，欢迎大家积极贡献  ヾ(≧▽≦*)o
- 接口  
		https://random-api.creeper2077.online/sentence.php 
- 参数  
**game**  
> 选择目标游戏(崩崩崩 OR 原神)  
可选值:bh3 ys  
默认值:随机  
**encode**  
> 指定返回格式  
可选值:js json text   
默认值:text  
**selete**  
> 指定选择器,配合*encode=js*使用   
默认值:#sentence

- 返回值  
*encode=js*      
``` javascript
document.querySelector('#sentence').innerText='为世界上所有的美好而战';
```
*encode=json*
```json
{"text":"为世界上所有的美好而战"}
```
*encode=text*  
```
为世界上所有的美好而战
```
- 演示  
> 试着刷新页面，句子会改变哦(需要js)  

<p id="sentence">
<script src="https://random-api.creeper2077.online/sentence.php?encode=js" defer></script>

***

### 随机音乐  
包含网易云音乐中原神,崩3的所有专辑,格式为ogg  
存放于[music目录](/music)  
- 接口  
		https://random-api.creeper2077.online/music.php
- 参数  
**game**  
> 选择目标游戏(崩崩崩 OR 原神)  
可选值:bh3 ys  
默认值:随机  

- 演示  
*试着刷新页面，音乐会改变哦 (GitHub似乎无法显示)`(*>﹏<*)′*  

<audio id="audio" controls="" preload="none"><source id="mp3" src="https://random-api.creeper2077.online/music.php"></audio>  
***

### 随机视频  
目前包含崩3动画短片以及原神EV,分辨率720P 24FPS,格式 *webm* ,为了缩小体积画质有些取舍哈   
> 注意:无法使用jsdelivr,有20M的大小限制
存放于[video目录](/video)  
- 接口  
		https://random-api.creeper2077.online/video.php
- 参数  
**game**  
> 选择目标游戏(三崩子 OR 原神)  
可选值:bh3 ys  
默认值:随机  
- 演示
> 试着刷新页面，视频会改变哦  

<video controls="controls" autoplay="autoplay">
  <source src="https://random-api.creeper2077.online/video.php" type="video/webm" />
</video>

***
### 通用接口  
> 此通用接口会将数据重定向至各个接口
- 接口  
		https://random-api.creeper2077.online/api.php
- 参数  

**type**
> 选择类型

可选值:img sentence music video

**game**  
> 选择目标游戏(崩崩崩 OR 原神) 

可选值:bh3 ys  
默认值:bh3  

**encode**  
> 指定返回格式,仅当type=sentence时生效  

可选值:js json text   
默认值:text

<span id="deploy"></span>

## 部署 
### 使用Koyeb部署
查看[DEMO](https://random-api-mccreeper2077.koyeb.app)
> *Koyeb仍在内测,注册后会弹出等待页面,需要联系工作人员开通*
> + 注册并加入Koyeb的Slack
> + @负责人,表明你已有想部署的内容,使用Git部署
> + 慢慢等吧o(￣┰￣*)ゞ
登陆后出现以下界面时,说明账号已开通:
![koyeb控制台](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/koyeb-dashboard.png)
1. <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a>此仓库;

2. 进入Koyeb控制台,点击*DeployMyFirstApp*,配置如下;
   ![配置](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/koyeb-deploy.png)

3. 点击部署,大约5分钟就好了.

4. 除非流量超出免费额度,否则直接用Koyeb自带的CDN即可(有香港和新加坡节点)
   注意事项:

+ Koyeb免费额度为\$5每月(今年为\$50/m),所以建议选nano;
+ Koyeb为弹性计费,实际费用会低于标价;
+ Koyeb每个实例免费流量100GB每月,超出部分$0.04/GB.
***
### 部署到其他PaaS平台
理论上Koyeb教程基本适用于其他同类平台,不过由于仓库有1.33GB,部分平台会报错
目前已知无法部署的平台有:*Heroku*,*Glitch*,*Vercel*,*Railway*;
如果你发现了新的可以免费部署的平台,或者部署失败的平台,请告诉我（＾∀＾●）ﾉｼ
***
### 部署到VPS  
1. 把源码拷贝到网页目录    
2. 将*nginx_app.conf*的内容添加到*nginx.conf*的*server*部分
3. 配置CDN(可选)  

## 配置CDN
将CDN地址写入环境变量 *CDN_ADDR* 即可(一定要以*https://*开头),以下列举了几种实测可行的白嫖方案:
* Cloudflare
没有优选IP的情况下速度不太理想,记得要自定义规则配置,缓存webm和ogg(webp会默认缓存)

* Jsdelivr
速度快,且方便的选择,但有20M的大小限制,意味着无法加速视频。
CDN地址填你Fork的仓库的加速地址即可:
示例:https://cdn.jsdelivr.net/gh/你的用户名/random-api@main
**声明** : 请在使用前阅读并遵守Jsdelivr的[使用协议](https://www.jsdelivr.com/terms/acceptable-use-policy-jsdelivr-net).珍惜免费服务,切勿滥用!
造成的任何后果本人概不负责

* 静态托管
常见的有Render,Netlify等,这里推荐一个新找到的平台[4everland](https://4everland.org/),目前在测试中,没有流量限制:
1. 打开官网,点击*Start Deploying*,Github授权后点击*New Project*新建项目；
2. 选择你Fork的存储库,后面全部默认即可;
3. 慢慢等待(￣o￣) . z Z,直到部署状态变为*Success*（我花了4小时).
![部署成功](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/deploy-success.png)
4. 我在部署过程中遇到了卡在*Running*数小时的情况,如果超过8小时还没有变成*Syncing*或*Success*,建议将整个项目彻底删除,重新开始;
5. 将项目的域名写入环境变量*CDN_ADDR*.

***

### 强制使用CDN
默认情况下,Random-API使用CDN来传输图片、音乐和视频.
但仍可以通过*cdn*参数直接从服务器获取资源,这可能消耗大量流量.
你可以在*nginx_app.conf*中取消注释以下内容以禁用此功能:
```ini
#Forced use of CDN to save traffic
#location ~* \.(webp|ogg|webm)$ {
#return 404;
#}
```

## 部分内容来源  

### 崩3图片  
[三蹦子官网](https://bh3.mihoyo.com/wallpapers)  
B站
[崩坏3](https://space.bilibili.com/256667467)(今超穹?)  
[崩坏3第一偶像爱酱](https://space.bilibili.com/27534330)  

### 原神图片  
B站 [原神](https://t.bilibili.com/542713497747206611)  
### 音乐  
[网易云音乐|HOYO-Mix](https://music.163.com/#/user/home?id=1321189664)  

### 视频  
B站  
[原神](https://space.bilibili.com/401742377)  
[崩坏3第一偶像~~爱酱~~渡鸦](https://space.bilibili.com/27534330)  

## TODO
1. ~~给视频加上CDN~~(已完成)
2. 添加视频分类

## LICENSE
> 本程序使用GNU GENERAL PUBLIC LICENSE 3.0协议授权

## 留言板
*在Github上不可用,请前往[项目网站](https://random-api.creeper2077.online/#%E7%95%99%E8%A8%80%E6%9D%BF)*

<script src='https://cdn.jsdelivr.net/npm/valine/dist/Valine.min.js'></script>
<div id="vcomments"></div>
<script>
    new Valine({
        el: '#vcomments',
        appId: 'jIwmTT4YEtSTcT8ifUpty3Bt-MdYXbMMI',
        appKey: '6dUHn7r99tYKJ8UkVFIJQhe5',
        placeholder: '留下你宝贵的建议',
        Gravatar: 'wavatar',
        Number: '6',
        Boolean: true,
        emojiCDN: 'https://mirrorcdn.bili33.top/',
        emojiMaps:{
            "HONKAI3-AIChan1": "HONKAI3-AIChan/12bcb0ea6827654841cfc26a04184188d3bf3c13.gif",
            "HONKAI3-AIChan2": "HONKAI3-AIChan/2f2de97f9fd55579fc79b62fcae092ad8e011f6f.png",
            "HONKAI3-AIChan3": "HONKAI3-AIChan/349e21240a038001de7844e40552fbb5c5ca93df.jpg",
            "HONKAI3-AIChan4": "HONKAI3-AIChan/94526da47cbe6f230c29c8fd6d703260ba93c879.png",
            "HONKAI3-AIChan5": "HONKAI3-AIChan/9985055e512eaa1f9eda7493ed5a77130e8c5a49.jpg",
            "HONKAI3-AIChan6": "HONKAI3-AIChan/a6d9c3d9665697d2232e201ff0402f8d5e1c3b10.jpg",
            "HONKAI3-AIChan8": "HONKAI3-AIChan/d65b36ccae610bc4479209cd6e62bb91b0f76188.jpg",
            "HONKAI3-Crayon1": "HONKAI3-Crayon/1.gif",
            "HONKAI3-Crayon2": "HONKAI3-Crayon/10.gif",
            "HONKAI3-Crayon3": "HONKAI3-Crayon/11.gif",
            "HONKAI3-Crayon4": "HONKAI3-Crayon/12.gif",
            "HONKAI3-Crayon5": "HONKAI3-Crayon/13.gif",
            "HONKAI3-Crayon6": "HONKAI3-Crayon/14.gif",
            "HONKAI3-Crayon7": "HONKAI3-Crayon/15.gif",
            "HONKAI3-Crayon8": "HONKAI3-Crayon/16.gif",
            "HONKAI3-Crayon9": "HONKAI3-Crayon/2.gif",
            "HONKAI3-Crayon10": "HONKAI3-Crayon/3.gif",
            "HONKAI3-Crayon11": "HONKAI3-Crayon/4.gif",
            "HONKAI3-Crayon12": "HONKAI3-Crayon/5.gif",
            "HONKAI3-Crayon13": "HONKAI3-Crayon/6.gif",
            "HONKAI3-Crayon14": "HONKAI3-Crayon/7.gif",
            "HONKAI3-Crayon15": "HONKAI3-Crayon/8.gif",
            "HONKAI3-Crayon16": "HONKAI3-Crayon/9.gif",
            "HONKAI3-Daily1": "HONKAI3-Daily/1.gif",
            "HONKAI3-Daily2": "HONKAI3-Daily/10.gif",
            "HONKAI3-Daily3": "HONKAI3-Daily/11.gif",
            "HONKAI3-Daily4": "HONKAI3-Daily/12.gif",
            "HONKAI3-Daily5": "HONKAI3-Daily/13.gif",
            "HONKAI3-Daily6": "HONKAI3-Daily/14.gif",
            "HONKAI3-Daily7": "HONKAI3-Daily/15.gif",
            "HONKAI3-Daily8": "HONKAI3-Daily/16.gif",
            "HONKAI3-Daily9": "HONKAI3-Daily/2.gif",
            "HONKAI3-Daily10": "HONKAI3-Daily/3.gif",
            "HONKAI3-Daily11": "HONKAI3-Daily/4.gif",
            "HONKAI3-Daily12": "HONKAI3-Daily/5.gif",
            "HONKAI3-Daily13": "HONKAI3-Daily/6.gif",
            "HONKAI3-Daily14": "HONKAI3-Daily/7.gif",
            "HONKAI3-Daily15": "HONKAI3-Daily/8.gif",
            "HONKAI3-Daily16": "HONKAI3-Daily/9.gif",
            "HONKAI3-Durandal-Search1": "HONKAI3-Durandal-Search/041f90df17c5aab87380486fd6f320cb18918d31.gif",
            "HONKAI3-Durandal-Search2": "HONKAI3-Durandal-Search/36110c3ce45f4a917fc2ff57bfdf481fd21e8046.gif",
            "HONKAI3-Durandal-Search3": "HONKAI3-Durandal-Search/63bbf9589387af7b66a717826458a12f9c4b8a5d.gif",
            "HONKAI3-Durandal-Search4": "HONKAI3-Durandal-Search/822416f9df40a319cbc993486008ee9f050b7d82.gif",
            "HONKAI3-Durandal-Search5": "HONKAI3-Durandal-Search/b67b538d743e0ba32cca7ad8e048e2151e0d3ad4.gif",
            "HONKAI3-Durandal-Search6": "HONKAI3-Durandal-Search/f1b9a456587638e488d93ccaa95dde59aef3af01.gif",
            "HONKAI3-MEI1": "HONKAI3-MEI/501ac209b259bb545dea898838c24229483fcfeb.gif",
            "HONKAI3-MEI2": "HONKAI3-MEI/5baf4306d1f685bf47922fbae365ccfba7721beb.gif",
            "HONKAI3-MEI3": "HONKAI3-MEI/624857651c863ea9571f5e557fca8516dd41e0fc.gif",
            "HONKAI3-MEI4": "HONKAI3-MEI/680311714674014d0c17f757eb40c3071448222a.gif",
            "HONKAI3-MEI5": "HONKAI3-MEI/bf68423446465d396d3cbd8856882b5e9fb1c0c7.gif",
            "HONKAI3-MEI6": "HONKAI3-MEI/d3a2a9c6ad1e2a0b262dca9354ab8de736d81cdf.gif",
            "HONKAI3-MEI7": "HONKAI3-MEI/dd0fd1f3668f4907c9f6fcd39c6138417ac0e1f5.gif",
            "HONKAI3-NEWYEAR-20191": "HONKAI3-NEWYEAR-2019/071bbe280b49a56f56673ca77a184c1a291e9afc.gif",
            "HONKAI3-NEWYEAR-20192": "HONKAI3-NEWYEAR-2019/74db7cc805ac5d1b84288404e94dbe326d28b9e5.jpg",
            "HONKAI3-NEWYEAR-20193": "HONKAI3-NEWYEAR-2019/878d2595a745699bb91dbf33cb42ae5b59bfd7b8.jpg",
            "HONKAI3-NEWYEAR-20194": "HONKAI3-NEWYEAR-2019/882f2334a29fe93338bb71457eff4d897f5616d9.jpg",
            "HONKAI3-NEWYEAR-20195": "HONKAI3-NEWYEAR-2019/9342f517b5b582ffe12ebd615110c1bf35356a30.gif",
            "HONKAI3-NEWYEAR-20196": "HONKAI3-NEWYEAR-2019/bbb0028c61d7d42bd2011fabb3f9cc484ddef25e.gif",
            "HONKAI3-NEWYEAR-20198": "HONKAI3-NEWYEAR-2019/cda9a6db290e994d523d34ae870fa809b9ba918c.gif",
            "HONKAI3-NEWYEAR-20199": "HONKAI3-NEWYEAR-2019/d98272af4c6c58dee0b50b42c58a5a65acfa6788.gif",
            "HONKAI3-NEWYEAR-201910": "HONKAI3-NEWYEAR-2019/dc1a2b2032fad29373fe8460d4ad89ca848355a9.jpg",
            "HONKAI3-Star1": "HONKAI3-Star/1.gif",
             "HONKAI3-Star2": "HONKAI3-Star/10.gif",
            "HONKAI3-Star3": "HONKAI3-Star/11.gif",
            "HONKAI3-Star4": "HONKAI3-Star/12.gif",
            "HONKAI3-Star5": "HONKAI3-Star/13.gif",
            "HONKAI3-Star6": "HONKAI3-Star/14.gif",
            "HONKAI3-Star7": "HONKAI3-Star/15.gif",
            "HONKAI3-Star8": "HONKAI3-Star/16.gif",
            "HONKAI3-Star9": "HONKAI3-Star/2.gif",
            "HONKAI3-Star10": "HONKAI3-Star/3.gif",
            "HONKAI3-Star11": "HONKAI3-Star/4.gif",
            "HONKAI3-Star12": "HONKAI3-Star/5.gif",
            "HONKAI3-Star13": "HONKAI3-Star/6.gif",
            "HONKAI3-Star14": "HONKAI3-Star/7.gif",
            "HONKAI3-Star15": "HONKAI3-Star/8.gif",
            "HONKAI3-Star16": "HONKAI3-Star/9.gif"
        },
        requiredFields:['nick']
    })
</script>

<script>
    var time;
    var norm_title = document.title;
    document.addEventListener('visibilitychange', function () {
        if (document.visibilityState == 'hidden') {
            clearTimeout(time);
            document.title = '舰长补给全保底，舰长副本零掉落';
        } else {
            document.title = '为世界上所有的美好而战';
            time = setTimeout(function () {
                document.title = norm_title;
            }, 3000);
        }
    });
</script>