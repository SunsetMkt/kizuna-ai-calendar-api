# kizuna_ai_calendar

绊爱日历项目后端Serverless API+OSS部署方案

基于哔哩哔哩用户[灰暗江原](https://space.bilibili.com/63045280)提供的实现思路、源码和视频资源。

## Serverless API部署

Vercel提供部署无服务器API的服务，使用项目[vercel-php](https://github.com/juicyfx/vercel-php)部署php。

调用举例：

`/kizunaai.php?id=63045280&date=02-28`

`/kizunaai.php?id=63045280&date=【两位数月】-【两位数日】`

## OSS部署

[onedrive-vercel-index](https://github.com/spencerwooo/onedrive-vercel-index)是可以部署在Vercel上的OneDrive/SharePoint文件索引和直链获取工具，通过在OneDrive上传相同文件结构视频资源的方法与API配合。

它的直链获取API格式是：

`/api?path=/KizunaAI/02-28/1.mp4&raw=true`

`/api?path=【从根目录“/”开始的文件路径】&raw=true`

## 视频资源结构

`/path-to/KizunaAI/MM-DD/*.mp4`

其中MM-DD需要包括每一日，02-29在API中被认为是02-28，不需要单独创建文件夹。

## 视频资源

由@灰暗江原提供，包括符合上述文件结构的365日早安视频

```
https://pan.baidu.com/s/1bG9qL4SXUzd1eTk4dmV6Og 
提取码：foqj
```

## 演示API和OSS

目前，Serverless API部署在`https://api.lwd-temp.top/api/kizunaai.php`

OSS部署在`https://drive.lwd-temp.top/KizunaAI`（浏览器查看），直链获取`https://drive.lwd-temp.top/api?path=/KizunaAI/【MM】-【DD】/【*.mp4】&raw=true`。
