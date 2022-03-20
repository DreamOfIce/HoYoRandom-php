# HoYoRandom-PHP | 部署  
使用方法请见[README](readme.md)  

**此文档已过时,正在更新中**
# 部署到Koyeb  
  
查看[DEMO](https://random-v0-dreamofice.koyeb.app)  
[![部署到Koyeb](https://www.koyeb.com/static/images/deploy/button.svg)](https://app.koyeb.com/deploy?type=git&name=HoYoRandom&ports=8080;http;/&repository=github.com/DreamOfIce/HoYoRandom-php&branch=main)  
  
点击上面的按钮部署,实例大小建议选择nano.  
  
# 部署到VPS  
  
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
  