# 绊爱日历项目使用的文件夹结构转JSON工具
# 请在./KizunaAI/ 下运行
# 输出json文件名为jsontree.json
# 作者：lwd-temp
# 日期：2022-02-28
import json
import os

full_tree = {}

for root, dirs, files in os.walk('.'):
    for dir in dirs:
        dir_name = dir
        for subroot, subdirs, subfiles in os.walk(os.path.join('.', dir)):
            full_tree.update({dir_name: subfiles})

with open("jsontree.json", "a") as f:
    json.dump(full_tree, f)
