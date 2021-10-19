![logo](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/cover.png "Honkai&Genshin")

<a href="https://github.com/Creeper2077/random-api/stargazers"><img style="display: inline" src="https://img.shields.io/github/stars/Creeper2077/random-api?style=social"></a>  <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a> <a href="https://github.com/Creeper2077/random-api"><img style="display: inline" src="https://img.shields.io/github/downloads/Creeper2077/random-api/total?style=social"></a>

# Random API of Genshin Impact&Honkai Impact 3 

[TOC]

Include random pictures,music,video&Hitokoto  
Using*jsdelivr*CDN  
If the demand is large, please deploy yourself! 
I hope you can make positive contributions O(∩_∩)O  
You can create a *Issues* OR mail to [feedback@creeper2077.online](mailto:feedback@creeper077.online)    

**[简体中文](/README.md!)**

Tips:*Part of this paper is AI aided translation!*

## My blogs
[www.creeper2077.online](https://www.creeper2077.online)   

## Mirror
> This warehouse has image warehouses in GitHub, gitlab and bitbucket &amp; codebreg. You can view them anywhere q(≧▽≦q)  
[Github](https://github.com/Creeper2077/random-api)  
[Gitlab](https://gitlab.com/Creeper2077/random-api)  
[Bitbucket](https://bitbucket.org/creeper2077/random-api)  
[Codebreg](https://codeberg.org/creeper2077/random-api)

## HOW TO USE

### Force CDN
> By default, you can use the * CDN = false * parameter to obtain resources directly from the server, which may consume a lot of traffic
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
Store in [/img](/tree/main/img)  
- API  
		https://random-api.creeper2077.online/img.php
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)
Allow:bh3 ys  
Default value:bh3  

- Demonstration  
*Try to refresh the page, the picture will change( •̀ ω •́ )✧*  
![Honaki photo](https://random-api.creeper2077.online/img.php "It's random!")  
![Genshin photo](https://random-api.creeper2077.online/img.php?game=ys "It's random!")  

***

### Hitokoto   
Tip: the content is in Chinese  ヾ(≧▽≦*)o
- API  
		https://random-api.creeper2077.online/hitokoto.php 
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)  
Allow:bh3 ys  
Default value:bh3  
**encode**  
> Specifies the return format  
Allow:js json text   
Default value:text  
- Return value  
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
-  Demonstration 
> Try to refresh the page, the sentence will change( •̀ ω •́ )✧(need JS)  

<p id="hitokoto">
<script src="https://random-api.creeper2077.online/hitokoto.php?encode=js" defer></script>

***

### Random music  
Contains all albums in Netease cloud music(*128Kbps ogg*)  
Store in[/music](/tree/main/music)  
- API  
		https://random-api.creeper2077.online/music.php
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)  
Allow:bh3 ys  
Default value:bh3  

- Demonstration  
*Try to refresh the page, the music will change( •̀ ω •́ )✧*  

<audio id="audio" controls="" preload="none"><source id="mp3" src="https://random-api.creeper2077.online/music.php"></audio>  
***

### Random video  
Random video (*720P 24FPS webm*) 
Store in[/video](/tree/main/video)  
- API  
		https://random-api.creeper2077.online/video.php
- Parm  
**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*)  
Allow:bh3 ys  
Default value:bh3  
- Demonstration
> Try to refresh the page, the video will change( •̀ ω •́ )✧  

<video controls="controls" autoplay="autoplay">
  <source src="https://random-api.creeper2077.online/video.php" type="video/webm" />
</video>

***
### Currency API
- API  
		https://random-api.creeper2077.online/api.php
- Parm  

**type**
> type
Allow:img hitokoto music video

**game**  
> bh3(*Honkai3rd*) OR ys(*Genshin*) 
Allow:bh3 ys  
Default value:bh3  

**encode**  
> Specifies the return format,Available if type=hitokoto  
Allow:js json text   
Default value:text

## HOW TO DEPLOY 
### Deploy to Heroku(Not recommended)
Demo:
[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/Creeper2077/random-api)

***

### Deploy to Koyeb
Demo:
*Koyeb is still in internal test. After registration, a waiting page will pop up. You need to contact the staff to open it*
When the following interface appears after login, it indicates that the account has been opened:
![koyeb dashboard](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/readme/koyeb-dashboard.png)
1. <a href="https://github.com/Creeper2077/random-api/network/members"><img style="display: inline" src="https://img.shields.io/github/forks/Creeper2077/random-api?style=social"></a>此仓库;
2. Uncomment the following in *nginx_app.conf* to disable this feature:
```ini
#Forced use of CDN to save traffic
#location ~* \.(webp|ogg|webm)$ {
#return 404;
#}
```
3. Click the *DeployMyFirstApp* button;
4. Sample configuration：
![config](https://cdn.jsdelivr.net/gh/Creeper2077/random-api@main/readme/koyeb-deploy.png)
5. Click the Deploy button.
6. Enjoy it!
NOTICE:
+ Koyeb provide $5 of monthly usage credit for free
+ Transfer:100GB free, $0.04/GB afterwards.
***

### Deploy to VPS  

1. Copy the source code to the web directory   
2. Add*nginx_app.conf*to the *server* section of *nginx.conf*

## TODO
1. ~~Add CDN to the video~~(Finished)
2. Add classification

## LICENSE
> GNU GENERAL PUBLIC LICENSE 3.0

<script>
//Redirect
if (document.domain="random-api.creeper2077.online") {
var lang = navigator.language || navigator.userLanguage;
lang = lang.substr(0, 2);
if (lang == "zh") {
	window.location.replace("https://random-api.creeper2077.online");
}
}
</script>