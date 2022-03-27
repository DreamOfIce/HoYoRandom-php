# HoYoRandom-PHP | 部署  
使用方法请见[README](readme.md)  

[TOC]  
**此文档已过时,正在更新中**
# 部署
## 部署到Koyeb  
查看[DEMO](https://random-v0-dreamofice.koyeb.app)  
[![部署到Koyeb](https://www.koyeb.com/static/images/deploy/button.svg)](https://app.koyeb.com/deploy?type=git&name=HoYoRandom&ports=8080;http;/&repository=github.com/DreamOfIce/HoYoRandom-php&branch=main)  
  
## 部署到Heroku

点击上面的按钮部署,实例大小建议选择nano.  
  
# 环境变量
|     环境变量      |            描述             |        值        |                      示例                      | 必填  |
| :---------------: | :-------------------------: | :--------------: | :--------------------------------------------: | :---: |
|  `RES_REPO_NAME`  |    存放资源的Gitub仓库名    |  Username/Repo   |        `DreamOfIce/HoYoRandomResources`        |  是   |
|     `RES_URL`     |        资源文件的URL        |   URL(带协议)    | `https://cdn.example.cn/path/to/the/resource/` |  是   |
|   `GITHUB_AUTH`   |      用于获取资源目录       | User:GithubToken |           `Username:gh_tokenabcdefg`           |  否   |
| `WEBHOOK_SECRECT` | 验证webhook请求(见[此处]()) |    任意字符串    |               `vStTKNqE39oqIJqY`               |  否   |

> 注意事项  
> 1. Github API对未经验证的用户有60req/h/IP的限制,并且由于PaaS平台IP共享,实际可用值会更低.所以墙裂建议使用;  
> 2. 在生产环境中,请务必填写`WEBHOOK_SECRECT`,否则任何人可以通过POST`https://API地址/update`来触发更新.  