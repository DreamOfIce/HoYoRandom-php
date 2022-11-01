# HoYoRandom-php  
  
![GitHub commit activity](https://img.shields.io/github/commit-activity/m/dreamofice/HoYoRandom-php)![GitHub Repo stars](https://img.shields.io/github/stars/dreamofice/HoYoRandom-php)![GitHub forks](https://img.shields.io/github/forks/dreamofice/HoYoRandom-php)  
包括原神&崩坏3精选图片、音乐、视频以及名台词.  
欢迎[Fork](https://github.com/DreamOfIce/HoYoRandom-php/fork)和[PR](https://github.com/DreamOfIce/HoYoRandom-php/pulls);  
  
[项目网站](https://www.dreamofice.cn/project/HoYoRandom/)  
  
# 开发进度  
*   [x] 给视频加上CDN  
*   [x] 从Git获取文件列表,使API与资源分离  
*   [x] 提高较小视频的画质  
*   [ ] 使用nodejs重写 (进行中)  
  
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
`https://api.dreamofice.cn/hoyorandom/`  
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
### 默认  
![随机图片](https://api.dreamofice.cn/hoyorandom/img "这是随机的哦")  

### Json  
````json
{
    "name": "83ef76b315707993d5734222936cfa2f4aa30ede.webp",
    "url": "https://cdn.dreamofice.cn/HoYoRandomResources/img/bh3/83ef76b315707993d5734222936cfa2f4aa30ede.webp"
}
````
  
## 音频示例
### 默认
<audio src="https://api.dreamofice.cn/hoyorandom/music">似乎不支持预览(っ °Д °;)っ </audio>  

### Json  
````json
{
    "name": "陈致逸,HOYO-MiX - Rex Incognito 尘世闲游.mp3",
    "url": "https://cdn.dreamofice.cn/p/HoYoRandomResources/music/ys/陈致逸,HOYO-MiX - Rex Incognito 尘世闲游.mp3"
}
````
## 视频示例
### 默认
<video src="https://api.dreamofice.cn/hoyorandom/video">似乎不支持预览(っ °Д °;)っ </video>  

### Json  
````json
{
    "name": "24277076-1-208.mp4",
    "url": "https://cdn.dreamofice.cn/HoYoRandomResources/video/bh3/24277076-1-208.mp4"
}
````

## 一言示例 

### Json(默认)  
````json
{
    "hitokoto": "最初的鸟儿是不会飞翔的,飞翔是它们勇敢跃入峡谷的奖励"
}
````  

### javaScript
````js
document.querySelector('#hitokoto').innerText='最初的鸟儿是不会飞翔的,飞翔是它们勇敢跃入峡谷的奖励';
````  

### 纯文本  
````text
最初的鸟儿是不会飞翔的,飞翔是它们勇敢跃入峡谷的奖励
````  
  
# 部署  
见 [deploy.md](deploy.md)
  
# LICENSE  
  
> GNU GENERAL PUBLIC LICENSE 3.0  
