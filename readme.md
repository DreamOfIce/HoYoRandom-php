![logo](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/cover.png "超级缝合怪")

<a href="https://github.com/Creeper2077/random-api/stargazers"><img style="display: inline" src="https://img.shields.io/github/stars/Creeper2077/random-api?style=social"></a>  <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a> <a href="https://github.com/Creeper2077/random-api"><img style="display: inline" src="https://img.shields.io/github/downloads/Creeper2077/random-api/total?style=social"></a>

# 原神、崩3随机API  

[TOC]

包括原神&崩坏3精选图片、音乐、视频以及名台词
支持自定义CDN  
如果需求量很大的话请自已部署!  
萌新边学边做,希望大家多多担待q(≧▽≦q)
目前资源库内容很少，希望大家可以积极贡献 O(∩_∩)O  
发现bug可以创建 *Issues* 或发[邮件](mailto:feedback@creeper077.online)给我    

> Also available in [English](/README_en.md)!

## 我的博客
[我的博客](https://www.creeper2077.online)  
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
[下载地址](https://gitea.com/creeper2077/honkai3-wallpaper/archive/201016.zip)  
***
2. 崩3&原神音乐合集  
**网易云歌单**  
> 可配合*aplayer*实现随机播放  
> *playlist:6990221411*  
> [查看歌单](https://music.163.com/#/playlist?id=6990221411)  


## 使用方法

### 强制使用CDN
> 默认可以使用*cdn=false*参数直接从服务器获取资源,可能消耗大量流量  
可以在*nginx_app.conf*中取消注释以下内容以禁用此功能:
```ini
#Forced use of CDN to save traffic
#location ~* \.(webp|ogg|webm)$ {
#return 404;
#}
```

***

### 随机图片
随机显示原神或崩坏3的图片，目前全部为1920*1080,webp格式  
存放于 [img 目录](/tree/main/img)  
- 接口  
		https://random-api.creeper2077.online/img.php
- 参数  
**game**  
> 选择目标游戏(崩崩崩 OR 原神)  
可选值:bh3 ys  
默认值:bh3  

- 演示  
*试着刷新页面，图片会改变哦*  
![崩3随机图片](https://random-api.creeper2077.online/img.php "这是随机的哦")  
![原神随机图片](https://random-api.creeper2077.online/img.php?game=ys "这是随机的哦")  

***

### 一言   
包含崩3,原神的名台词、名梗，目前内容还很少，欢迎大家积极贡献  ヾ(≧▽≦*)o
- 接口  
		https://random-api.creeper2077.online/hitokoto.php 
- 参数  
**game**  
> 选择目标游戏(崩崩崩 OR 原神)  
可选值:bh3 ys  
默认值:bh3  
**encode**  
> 指定返回格式  
可选值:js json text   
默认值:text  
- 返回值  
*encode=js*      
``` javascript
(function hitokoto(){var hitokoto='为世界上所有的美好而战';var dom=document.querySelector('#hitokoto');Array.isArray(dom)?dom[0].innerText=hitokoto:dom.innerText=hitokoto;})()
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

<p id="hitokoto">
<script src="https://random-api.creeper2077.online/hitokoto.php?encode=js" defer></script>

***

### 随机音乐  
包含网易云音乐中原神,崩3的所有专辑,格式为ogg  
存放于[music目录](/tree/main/music)  
- 接口  
		https://random-api.creeper2077.online/music.php
- 参数  
**game**  
> 选择目标游戏(崩崩崩 OR 原神)  
可选值:bh3 ys  
默认值:bh3  
 
- 演示  
*试着刷新页面，音乐会改变哦 (GitHub似乎无法显示)`(*>﹏<*)′*  

<audio id="audio" controls="" preload="none"><source id="mp3" src="https://random-api.creeper2077.online/music.php"></audio>  
***

### 随机视频  
目前包含崩3动画短片以及原神EV,分辨率720P 24FPS,格式 *webm* ,为了缩小体积画质有些取舍哈   
> 注意:无法使用jsdelivr,有20M的大小限制
存放于[video目录](/tree/main/video)  
- 接口  
		https://random-api.creeper2077.online/video.php
- 参数  
**game**  
> 选择目标游戏(三崩子 OR 原神)  
可选值:bh3 ys  
默认值:bh3  
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
可选值:img hitokoto music video

**game**  
> 选择目标游戏(崩崩崩 OR 原神) 
可选值:bh3 ys  
默认值:bh3  

**encode**  
> 指定返回格式,仅当type=hitokoto时生效  
可选值:js json text   
默认值:text

## 部署方法 
### 使用Heroku部署(不推荐)
> Heroku网站被墙,服务器多数被墙,不推荐使用
点击下面的按钮进行部署（Heroku自定义域名要绑卡,可以用*cfworker*反代解决)  
[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/Creeper2077/random-api)

***  

### 使用Koyeb部署
> *Koyeb仍在内测,注册后会弹出等待页面,需要联系工作人员开通*
> + 注册并加入Koyeb的Slack
> + @负责人,表明你已有想部署的内容,使用Git部署
> + 慢慢等吧o(￣┰￣*)ゞ
登陆后出现以下界面时,说明账号已开通:
![koyeb控制台](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/readme/koyeb-dashboard.png)
1. <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a>此仓库;
2. 将*nginx_app.conf*中以下内容取消注释(节省流量):
```ini
#Forced use of CDN to save traffic
#location ~* \.(webp|ogg|webm)$ {
#return 404;
#}
```
3. 进入Koyeb控制台,点击*DeployMyFirstApp*,配置如下;
![配置](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/readme/koyeb-deploy.png)
4. 点击部署,大约5分钟就好了.

注意事项:
+ Koyeb免费额度为\$5每月(今年为\$50/m),所以建议选nano;
+ Koyeb为弹性计费,实际费用会低于标价;
+ Koyeb每个实例免费流量100GB每月,超出部分$0.04/GB.

***

### 部署到VPS  

1. 把源码拷贝到网页目录    
2. 将*nginx_app.conf*的内容添加到*nginx.conf*的*server*部分  


## 部分内容来源  

### 崩3图片  
[三蹦子官网](https://bh3.mihoyo.com/wallpapers)  
B站 [最惨官号——崩坏3](https://space.bilibili.com/256667467)  

### 原神图片  
[原神官方](https://t.bilibili.com/542713497747206611)  
### 音乐  
[网易云音乐|HOYO-Mix](https://music.163.com/#/user/home?id=1321189664)  
_**HOYO-Mix YYDS**_

### 视频  
B站  
[原神](https://space.bilibili.com/401742377)  
[崩坏3第一偶像~~爱酱~~渡鸦](https://space.bilibili.com/27534330)  

## TODO
1. ~~给视频加上CDN~~(已完成)
2. 添加视频分类

## LICENSE
> 本程序使用GNU GENERAL PUBLIC LICENSE 3.0协议授权

<script>
// 根据语言重定向
if (document.domain="random-api.creeper2077.online") {
	var lang = navigator.language || navigator.userLanguage;
	lang = lang.substr(0, 2);
	if (lang != "zh") {
		window.location.replace("https://random-api.creeper2077.online/index-en.html");
	}
}
//离开时改变标题
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