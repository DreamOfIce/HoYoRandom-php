![logo](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/banner.jpg "Honkai&Genshin")

<a href="https://github.com/Creeper2077/random-api/stargazers"><img style="display: inline" src="https://img.shields.io/github/stars/Creeper2077/random-api?style=social"></a>  <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a> <a href="https://github.com/Creeper2077/random-api"><img style="display: inline" src="https://img.shields.io/github/downloads/Creeper2077/random-api/total?style=social"></a>

# Random API of Genshin Impact&Honkai Impact 3 

[TOC]

Include random pictures,music,video&sentence  
*Support custom CDN*  
You can directly use the services I provide, or deploy to koyeb &amp; deploy to your own server for free
The first project of Mengxin, please give more advice q(≧▽≦q)
At present, there are few contents in the resource library. I hope you can actively contributeO(∩_∩)O
If you have any suggession , please leave a message on the [message board](https://random-api.creeper2077.online/#%E7%95%99%E8%A8%80%E6%9D%BF) or[Email me](mailto:feedback@creeper077.online)    

**[简体中文](/README.md)**

Tips:*Part of this paper is AI aided translation!*

## My sites

[Projetc site](https://random-api.creeper2077.online)
[www.creeper2077.online](https://www.creeper2077.online)   

## Mirror
> This warehouse has image warehouses in GitHub, gitlab and bitbucket &amp; codebreg. You can view them anywhere q(≧▽≦q)  
[Github](https://github.com/Creeper2077/random-api)  
[Gitlab](https://gitlab.com/Creeper2077/random-api)  
[Bitbucket](https://bitbucket.org/creeper2077/random-api)  
[Codebreg](https://codeberg.org/creeper2077/random-api)

## HOW TO USE

### Force use CDN
By default, the Random-API uses CDN to transmit pictures,music and video.
However, you can still obtain resources directly from the server through the *CDN* parameter, which may consume a lot of traffic
You can uncomment the following in *nginx_app.conf* to disable this feature:
```ini
#Forced use of CDN to save traffic
#location ~* \.(webp|ogg|webm)$ {
#return 404;
#}
```
***

### Random pictures
Random images 1920*1080,webp  
Store in [/img](/img)  
- API  
		https://random-api.creeper2077.online/img.php
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)
Allow:bh3 ys  
Default:Random  

- Demonstration  
*Try to refresh the page, the picture will change( •̀ ω •́ )✧*  
![Honaki photo](https://random-api.creeper2077.online/img.php "It's random!")  
![Genshin photo](https://random-api.creeper2077.online/img.php?game=ys "It's random!")  

***

### Sentence   
Tip: the sentences are in Chinese  ヾ(≧▽≦*)o
- API  
		https://random-api.creeper2077.online/sentence.php 
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)  
Allow:bh3 ys  
Default:Random  

**encode**  
> Specifies the return format  
Allow:js json text   
Default:text  

**selete**
> Specfies the selete(use with *encode=js*)
Default:#sentence

- Return value  
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
-  Demonstration 
> Try to refresh the page, the sentence will change( •̀ ω •́ )✧(need JS)  

<p id="sentence">
<script src="https://random-api.creeper2077.online/sentence.php?encode=js" defer></script>

***

### Random music  
Contains all albums in Netease cloud music(*128Kbps ogg*)  
Store in[/music](/music)  
- API  
		https://random-api.creeper2077.online/music.php
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)  
Allow:bh3 ys  
Default:Random  

- Demonstration  
*Try to refresh the page, the music will change( •̀ ω •́ )✧*  

<audio id="audio" controls="" preload="none"><source id="mp3" src="https://random-api.creeper2077.online/music.php"></audio>  
***

### Random video  
Random video (*720P 24FPS webm*) 
Store in[/video](/video)  
- API  
		https://random-api.creeper2077.online/video.php
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)  
Allow:bh3 ys  
Default:Random  
- Demonstration
> Try to refresh the page, the video will change( •̀ ω •́ )✧  

<video controls="controls">
  <source src="https://random-api.creeper2077.online/video.php" type="video/webm" />
</video>

***
### Currency API
- API  
		https://random-api.creeper2077.online/api.php
- Parm  

**type**
> type
Allow:img sentence music video

**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*) 
Allow:bh3 ys  
Default:Random  

**encode**  
> Specifies the return format(use with *type=sentence*)  
Allow:js json text   
Default:text

**selete**
> Specfies the selete(use with *encode=js*)
Default:#sentence

## HOW TO DEPLOY 
### Deploy to Koyeb
(https://random-api-mccreeper2077.koyeb.app)
*Koyeb is still in internal test. After registration, a waiting page will pop up. You need to contact the staff to open it*
When the following interface appears after login, it indicates that the account has been opened:
![koyeb dashboard](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/koyeb-dashboard.png)
1. <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a>this repo;
2. Click the *DeployMyFirstApp* button;
4. Sample configuration：
![config](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/res/koyeb-deploy.png)
5. Click the Deploy button.
6. Enjoy it!
NOTICE:
+ Koyeb provide $5 of monthly usage credit for free
+ Transfer:100GB free, $0.04/GB afterwards.
***
### Deploy to other PaaS platforms
Theoretically, the koyeb tutorial is basically applicable to other similar platforms. However, because the warehouse has 1.33GB, some platforms will report errors
Currently known platforms that cannot be deployed include: *Heroku*, *Glitch*, *Vercel*, *Railway*;
If you find a new platform that can be deployed for free or a platform that fails to be deployed, please let me know (＾∀＾●) ﾉ
***
### Deploy to VPS  

1. Copy the source code to the web directory   
2. Add*nginx_app.conf*to the *server* section of *nginx.conf*

## CONFIGURE CDN
Add the URL of CDN to the env *CDN_ADDR*(must start with *https://*)
There are some free choices below:
1. cloudflare CDN,need to add ustom rules.(Ordinary speed)
2.Jsdelivr CDN.It's very fast.But there is a size limit of 20m, so the videos cannot be accelerated.

## TODO
1. ~~Add CDN to the video~~(Completed!)
2. Add classification

## LICENSE
> GNU GENERAL PUBLIC LICENSE 3.0