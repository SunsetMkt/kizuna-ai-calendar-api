# api

php的服务器API，目前使用Vercel的Sercerless部署，使用项目vercel-php

## API调用参考

```
参数：id = 63045280 哔哩哔哩用户@灰暗江原用户ID
    date = MM-DD格式，**不需要**与服务器时间相同 例如01-01 02-22 12-31
API返回值：用于直接获取OSS（对象存储服务，可以理解为网盘）上文件的URL，纯文本
```

## 配置说明

重要：`$file_struct_str` 填上`tool/json_tree.py`生成的`jsontree.json`内容，保持这个变量是字符串

其余见源码

## kizunaai.php

生产环境php

## kizunaai_demo.php

测试环境，不要用

## app.php

灰暗江原的最初版本源码

```
参数：id = 0630
    date = MM-DD格式，**需要**与服务器时间相同 例如01-01 02-22 12-31
```

会根据date读取`./videos/KizunaAI`下文件夹名符合MM-DD格式内的文件，随机返回文件夹内一文件路径，返回格式为`./videos/KizunaAI/MM-DD/*.mp4`
