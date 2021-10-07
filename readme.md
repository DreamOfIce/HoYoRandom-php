![logo](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@master/randomapi.png "超级缝合怪")

<iframe src="https://ghbtns.com/github-btn.html?user=Creeper2077&repo=random-apiap&type=star&count=true" frameborder="0" scrolling="0" width="170" height="30" title="GitHub"></iframe> 

# 原神、崩3随机API  

[TOC]

包括随机图片,随机音乐,随机视频以及一言，适用于网页  
使用*jsdelivr*CDN  
如果需求量很大的话请&自已部署副本\自建服务器!  
目前资源库内容很少，希望大家可以积极贡献^_^  
可以创建 _Issues_ 或发邮件至[feedback@creeper2077.online](mailto:feedback@creeper077.online)  
> _部分资源来自互联网，版权归原作者所有_  
> _代码使用后的风险及产生的后果由使用者承担_
## 我的博客
[www.creeper2077.online](https://www.creeper2077.online)  
[在我的博客上查看此页面](https://www.creeper2077.online/service/random-api)  

## 资源整理
1. 崩3壁纸（1920*1080）共360张 _1GB_  
> 来源:崩崩崩官网  
>	b站 崩坏3 _**第三**_ 偶像爱酱 的动态分享  
>	b站 崩坏3 的动态分享  
[下载地址](https://download.creeper2077.online/random-api/bh3wallpapaer.zip)  
***
2. 崩3原神音乐合集  
**网易云歌单**  
> 可配合*aplayer*实现随机播放  
> ID:6990221411  
> [网页链接](https://music.163.com/#/playlist?id=6990221411)  

**压缩文件** 
_943MB_ 
> 音质较低 128Kbps  
> 适用于网页  
> [下载地址](https://download.creeper2077.online/random-api/music.zip)  
***

## 使用方法

### 随机图片
随机显示原神或崩坏3的图片，目前全部为1920*1080,jpg格式  
存放于 [img 目录](https://github.com/Creeper2077/random-api/tree/master/img)  
- 接口  
		https://random-api.creeper2077.online/img
- 参数  
**game**  
*选择目标游戏(崩崩崩 OR 原神)*  
可选值:bh3 ys  
默认值:bh3  

-演示  
*试着刷新页面，图片会改变哦*  
![崩3随机图片](https://random-api.creeper2077.online/img "这是随机的哦")  
![原神随机图片](https://random-api.creeper2077.online/img?game=ys "这是随机的哦")  

***

### 一言   
包含崩3,原神的名台词、名梗，目前内容还很少，欢迎大家积极贡献  
文件位置: bh3_Hitokoto.txt,ys_Hitokoto.txt  
- 接口  
		https://random-api.creeper2077.online/hitokoto 
- 参数  
**game**  
*选择目标游戏(崩崩崩 OR 原神)*  
可选值:bh3 ys  
默认值:bh3  
**encode**  
*指定文件编码*  
可选值:js json text   
默认值:text  
- 返回值  
*encode=js*      
``` javascript
function api(){document.write('为世界上所有的美好而战');}
```
*encode=json*
```json
{"text":"为世界上所有的美好而战"}
```
*encode=text*  
```
为世界上所有的美好而战
```
-演示  
*试着刷新页面，句子会改变哦(需要js)*  
<script type="text/javascript" src="https://random-api.creeper2077.online/hitokoto?encode=js"></script>

***

### 随机音乐  
包含网易云音乐中原神,崩3的所有专辑，音质128kbps,格式为mp3  
存放于[music目录](https://github.com/Creeper2077/random-api/tree/master/music)  
- 接口  
		https://random-api.creeper2077.online/music
- 参数  
**game**  
*选择目标游戏(崩崩崩 OR 原神)*  
可选值:bh3 ys  
默认值:bh3  
 
-演示  
*试着刷新页面，音乐会改变哦 GitHub似乎无法显示:-(*  

<audio id="audio" controls="" preload="none"><source id="mp3" src="https://random-api.creeper2077.online/music"></audio>  
***

### 随机视频  
目前包含崩3动画短片以及原神EV,分辨率720P 30FPS,格式 _webm_ ,为了缩小体积画质有些取舍哈   
**未使用CDN,jsdelivr有20M的最大大小限**  
> 鉴于视频所需的带宽较大，建议自行搭建[使用Heroku免费搭建](#deploy)  

存放于[video目录](https://github.com/Creeper2077/random-api/tree/master/video)  
- 接口  
		https://random-api.creeper2077.online/video
- 参数  
**game**  
*选择目标游戏(三崩子 OR 原神)*  
可选值:bh3 ys  
默认值:bh3  
- 演示
*试着刷新页面，视频会改变哦*  

<video controls="controls" autoplay="autoplay">
  <source src="https://random-api.creeper2077.online/video" type="video/webm" />
</video>

## 部署方法 
<span id="deploy"></span>

### 使用Heroku部署

点击下面的按钮进行部署（Heroku自定义域名要绑卡,可以用*cfworker*反代解决)  
[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/Creeper2077/random-api)
> DOMAIN填你的域名  
***  
### 部署到VPS  

1. 把源码拷贝到网页目录  
2. 添加一个名为*domain*的环境变量(值为你的域名)  
3. 将*nginx_app.conf*的内容添加到*nginx.conf*的*server*部分  


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
[花园花玲](https://space.bilibili.com/7966)  
[多多poi](https://space.bilibili.com/11253297)

---

## LICENSE
> 本程序使用GNU GENERAL PUBLIC LICENSE 3.0协议授权