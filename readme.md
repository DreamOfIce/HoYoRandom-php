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
  
你可以在任何一处查看q(≧▽≦q)  
[Github](https://github.com/DreamOfIce/HoYoRandom-php)  
[Gitee](https://gitee.com/DreamOfIce/HoYoRandom-php)  
[Coding](https://dreamofice.coding.net/public/public/HoYoRandom-PHP/git/files)  
# 资源仓库  
[点击前往](https://github.com/DreamOfIce/HoYoRandomResources) 

-------

# 使用方法 

## API地址
`https://api.dreamofice.cn/random-v0/`  
> 注意,本站已启用全站HSTS,并加入HSTS Preload,仅接受HTTPS访问.  

## 请求地址  
| 类型  |    地址     |                                    资源列表                                    |
| :---: | :---------: | :----------------------------------------------------------------------------: |
| 图片  |   `/img`    |   [链接](https://github.com/DreamOfIce/HoYoRandomResources/tree/master/img/)   |
| 音乐  |  `/music`   |  [链接](https://github.com/DreamOfIce/HoYoRandomResources/tree/master/music)   |
| 视频  |  `/video`   |  [链接](https://github.com/DreamOfIce/HoYoRandomResources/tree/master/video)   |
| 一言  | `/hitokoto` | [链接](https://github.com/DreamOfIce/HoYoRandomResources/tree/master/hitokoto) |

## 请求参数  
|  参数  |         值         |   默认值    |               备注               |
| :----: | :----------------: | :---------: | :------------------------------: |
|  game  |     `ys`,`bh3`     |  随机选取   |                                  |
|  type  |    `raw`,`json`    |    `raw`    |         不适用于一言接口         |
| encode | `text`,`js`,`json` |   `json`    |          仅限于一言接口          |
| selete |   任意CSS选择器    | `#hitokoto` | 仅当一言接口的encode为`js`时有效 |

-------

# 返回示例  

## 图片示例  
![随机图片](https://api.dreamofice.cn/random-v0/img "这是随机的哦")  
  
## 音频示例
<audio src="https://api.dreamofice.cn/random-v0/music">似乎不支持预览(っ °Д °;)っ </audio>  

## 视频示例
<video src="https://api.dreamofice.cn/random-v0/video">似乎不支持预览(っ °Д °;)っ </video>  

## 一言示例 

### Json(默认)
````json
{
    "hitokoto": "最初的鸟儿是不会飞翔的,飞翔是它们勇敢跃入峡谷的奖励"
}
````

### javaScript
````js

````
包含崩3,原神的名台词、名梗，目前内容还很少，欢迎大家积极贡献  ヾ(≧▽≦*)o  
  
*   接口  
    https://api.dreamofice.cn/random-v0/hitokoto  
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
> 默认值:#hitokoto  
  
*   返回值  
    *encode=js*  
  
```javascript  
document.querySelector('#hitokoto').innerText='为世界上所有的美好而战';  
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
    https://api.dreamofice.cn/random-v0/music  
*   参数  
    **game**  
  
> 选择目标游戏(崩崩崩 OR 原神)  
> 可选值:bh3 ys  
> 默认值:随机  
  
*   演示  
    *试着刷新页面，音乐会改变哦 (GitHub似乎无法显示)`(*>﹏<*)′*  
  
 
  
***  
  
## 随机视频  
  
目前包含崩3动画短片以及原神EV,分辨率720P 24FPS,格式 *webm* ,为了缩小体积画质有些取舍哈  
  
> 注意:无法使用jsdelivr,有20M的大小限制  
> 存放于[video目录](/video)  
  
*   接口  
    https://api.dreamofice.cn/random-v0/video  
*   参数  
    **game**  
  
> 选择目标游戏(三崩子 OR 原神)  
> 可选值:bh3 ys  
> 默认值:随机  
  
*   演示  
  
> 试着刷新页面，视频会改变哦  
  
***  
  
# 部署  
见 [deploy.md](deploy.md)
  
# LICENSE  
  
> GNU GENERAL PUBLIC LICENSE 3.0  
